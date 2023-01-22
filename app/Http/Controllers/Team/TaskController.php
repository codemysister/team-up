<?php

namespace App\Http\Controllers\Team;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\TaskFile;
use App\Models\TaskMember;
use App\Models\TaskRole;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{
    public function show(Team $team)
    {

        if (request('id')) {
            $task = Task::with([
                'members.member' => ['role', 'users'],
                'roles.role', 'files'
            ])
                ->where('team_id', '=', $team->id)->where('id', '=', request('id'))->get();

            return response()->json(['status' => 'success', 'task' => $task]);
        } else {
            $task = Task::with([
                'members.member' => ['role', 'users'],
                'roles.role', 'files'
            ])->where('team_id', '=', $team->id)->latest("updated_at")->get();

            foreach ($task as $t) {
                $t->start = Carbon::create($t->start)->isoFormat('dddd, D MMMM YYYY HH:mm');
                $t->end = Carbon::create($t->end)->isoFormat('dddd, D MMMM YYYY HH:mm');
            }
            return response()->json(['status' => 'success', 'task' => $task]);
        }
    }

    public function destroy()
    {
        if (request('id')) {
            $task = Task::with('files')->where('id', '=', request('id'))->first();
            foreach ($task->files as $f) {

                Storage::delete('public/' . $f->file);
            }
            $task->delete();

            return response()->json(['status' => 'success']);
        }
    }

    public function fetchMembers($slug)
    {
        $tim = Team::where('slug', '=', $slug)->with('members')->first();

        $members = DB::table('members')
            ->join('teams', 'teams.id', '=', 'members.team_id')
            ->join('users', 'users.id', '=', 'members.user_id')
            ->join('team_has_role', 'team_has_role.id', '=', 'members.role_id')
            ->where('members.team_id', '=', $tim->id)
            ->select('members.id as member_id', 'members.role_id as role_id', 'teams.id as team_id', 'users.name', 'users.profile_image', 'team_has_role.*')
            ->get();
        return response()->json(['status' => 'success', 'members' => $members]);
    }

    public function memberStore(Request $request)
    {

        $member = TaskMember::where('task_id', '=', $request->task_id)->where('member_id', '=', $request['member']['id'])->first();

        if ($member) {
            return response()->json(['status' => 'false']);
        } else {

            $taskMember = TaskMember::create([
                'task_id' => $request->task_id,
                'member_id' => $request['member']['id']
            ]);

            TaskRole::create([
                'task_id' => $request->task_id,
                'role_id' => $request['member']['role_id']
            ]);
            return response()->json(['status' => 'success', 'id' => $taskMember->id]);
        }
    }

    public function store(Request $request, Team $team)
    {


        $task = Task::create([
            'team_id' => $team->id,
            'title' => $request->title,
            'description' => $request->description,
            'start' => $request->start,
            'end' => $request->end,
        ]);

        $task->start = Carbon::create($task->start)->isoFormat('dddd, D MMMM YYYY HH:mm');
        $task->end = Carbon::create($task->end)->isoFormat('dddd, D MMMM YYYY HH:mm');

        $members = [];
        $roles = [];

        // dd(json_decode($request->memberSelected));
        foreach (json_decode($request->memberSelected) as $member) {

            $m = TaskMember::create([
                'task_id' => $task->id,
                'member_id' => $member->id
            ]);

            $e = [
                "task_id" => $m->task_id,
                "member_id" => $m->member_id
            ];



            $m = TaskMember::with('member')->find($m->id)->member->users;
            $e['profile_image'] = $m->profile_image;
            $e['google_id'] = $m->google_id;

            $members[] = $e;


            $r = TaskRole::create([
                'task_id' => $task->id,
                'role_id' => $member->role_id
            ]);

            $roles[] = TaskRole::with('role')->find($r->id)->role;
        }


        $files = [];
        foreach ($request->allFiles() as $file) {
            // $file->store('public/files');

            $path = Storage::disk('public')->put('task_file', $file);

            $f = TaskFile::create([
                'task_id' => $task->id,
                'file' => $path,
                'name' => $file->getClientOriginalName()
            ]);

            $files[] = $f;
        }


        return response()->json([
            'status' => 'success',
            'members' => $members,
            'task' => $task,
            'files' => $files,
            'roles' => $roles
        ]);
    }

    public function update(Request $request)
    {
        if (request('id')) {
            Task::find(request('id'))->update([
                'title' => $request->title,
                'description' => $request->description,
                'start' => $request->start,
                'end' => $request->end
            ]);

            return response()->json(['status' => 'success']);
        }
    }

    public function memberDelete(Team $team)
    {
        if (request('id')) {
            $taskMember = TaskMember::with('member.role')->find(request('id'));
            $taskRole = TaskRole::where('task_id', '=', $taskMember->task_id)->where('role_id', '=', $taskMember->member->role_id)->first();

            $taskMember->delete();
            $taskRole->delete();
            // TaskMember::destroy();
            return response()->json(['status' => 'success']);
        }
    }

    public function fileStore(Request $request)
    {
        foreach ($request->allFiles() as $file) {
            // $file->store('public/files');

            $path = Storage::disk('public')->put('task_file', $file);

            $f = TaskFile::create([
                'task_id' => $request->task_id,
                'file' => $path,
                'name' => $file->getClientOriginalName()
            ]);
        }
        return response()->json(['status' => 'success']);
    }

    public function fileDelete()
    {
        if (request('id')) {
            $taskFile = TaskFile::find(request('id'));

            Storage::delete('public/' . $taskFile->file);
            $taskFile->delete();

            return response()->json(['status' => 'success']);
        }
    }
}
