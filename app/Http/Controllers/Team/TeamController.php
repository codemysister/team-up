<?php

namespace App\Http\Controllers\Team;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\Category;
use App\Models\Conversation;
use App\Models\Member;
use App\Models\Qualification;
use App\Models\Requirement;
use App\Models\Room;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $teams = Team::where('status', 'open')->get();
        return view('user.team-list', compact('categories', 'teams'));
    }

    public function show(Request $request, $slug)
    {

        $tim = Team::where('slug', $slug)->first();

        return view('user.team-detail', compact('tim'));
    }

    public function store(Request $request)
    {
        $team = Team::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' => 'closed',
            'category_id' => $request->category,
            'user_id' => $request->user()->id,
            'slug' => Str::slug($request->name) . '-' . rand(),
        ]);

        Room::create([
            'team_id' => $team->id,
            'name' => $team->slug
        ]);


        foreach ($request->requirement as $requirements) {


            $requirement = Requirement::create([
                'team_id' => $team->id,
                'role' => $requirements['role'],
                'color' => '#FFF'
            ]);

            foreach ($requirements['qualification'] as $qualification) {
                Qualification::create([
                    'requirement_id' => $requirement->id,
                    'description' => $qualification
                ]);
            }
        }

        $team->users()->attach(Auth::user());

        return back();
    }

    public function myTeam()
    {
        $user = Auth::user();
        if ($user->hasRole('leader')) {
            $myteam = $user->teams;
        } else {
            $myteam = DB::table('members')
                ->join('teams', 'teams.id', '=', 'members.team_id')
                ->where('members.user_id', $user->id)
                ->get();
        }

        return view('user.my-team', compact('myteam'));
    }

    public function myTeamDetail(Request $request, $slug)
    {

        $tim = Team::where('slug', $slug)->first();
        $requirement = $tim->requirements;
        $member = DB::table('members')
            ->join('teams', 'teams.id', '=', 'members.team_id')
            ->join('users', 'users.id', '=', 'members.user_id')
            ->join('requirements', 'requirements.id', '=', 'members.requirement_id')
            ->where('members.team_id', '=', $tim->id)
            ->get();

        $pelamar = DB::table('applicants')
            ->join('users', 'users.id', '=', 'applicants.user_id')
            ->join('requirements', 'requirements.id', '=', 'applicants.requirement_id')
            ->where('applicants.team_id', '=', $tim->id)
            ->get();


        $owner = DB::table('teams')
            ->join('users', 'users.id', '=', 'teams.user_id')->first();

        $room = Room::where('team_id', $tim->id)->first();
        $currentMember = Member::where('user_id', $request->user()->id)->first();
        // dd($currentMember);
        // $conversations = Conversation::where('room_id', $room->id)->get();
        $conversations = DB::table('conversations')
            ->join('members', 'members.id', '=', 'conversations.member_id')
            ->join('users', 'users.id', '=', 'members.user_id')
            ->where('conversations.room_id', '=', $room->id)->get() ?? null;

        $isMember = Member::where('user_id', $request->user()->id)->where('team_id', $tim->id)->first();

        return view('user.myteam-detail', compact('tim', 'requirement', 'conversations', 'room', 'currentMember', 'owner', 'member', 'pelamar', 'isMember'));
    }

    public function fetchTeamDetail(Request $request, $slug)
    {

        $tim = Team::where('slug', $slug)->first();
        $requirement = $tim->requirements;
        $member = DB::table('members')
            ->join('teams', 'teams.id', '=', 'members.team_id')
            ->join('users', 'users.id', '=', 'members.user_id')
            ->join('requirements', 'requirements.id', '=', 'members.requirement_id')
            ->where('members.team_id', '=', $tim->id)
            ->get();

        $pelamar = DB::table('applicants')
            ->join('users', 'users.id', '=', 'applicants.user_id')
            ->join('requirements', 'requirements.id', '=', 'applicants.requirement_id')
            ->where('applicants.team_id', '=', $tim->id)
            ->get();


        $owner = DB::table('teams')
            ->join('users', 'users.id', '=', 'teams.user_id')->first();

        $room = Room::where('team_id', $tim->id)->first();
        $currentMember = Member::where('user_id', $request->user()->id)->first();
        // dd($currentMember);
        // $conversations = Conversation::where('room_id', $room->id)->get();
        $conversations = DB::table('conversations')
            ->join('members', 'members.id', '=', 'conversations.member_id')
            ->join('users', 'users.id', '=', 'members.user_id')
            ->where('conversations.room_id', '=', $room->id)->get() ?? null;

        $isMember = Member::where('user_id', $request->user()->id)->where('team_id', $tim->id)->first();

        // return view('user.myteam-detail', compact('tim', 'requirement', 'conversations', 'room', 'currentMember', 'owner', 'member', 'pelamar', 'isMember'));
        return response()->json([
            'tim' => $tim,
            'requirement' => $requirement,
            'member' => $member

        ]);
    }

    public function myTeamApply(Request $request, $slug)
    {

        $tim = Team::where('slug', $slug)->first();

        $request->validate([
            "cv" => "required|mimes:pdf|max:30000"
        ]);

        $file = Storage::disk('public')->put('pdf', $request->cv);

        Applicant::create([
            'user_id' => $request->user()->id,
            'team_id' => $tim->id,
            'requirement_id' => $request->role,
            'message' => $request->message,
            'cv' => $file,
        ]);

        return back();
    }

    public function myTeamAcc(Request $request)
    {

        $slug = Team::find($request->team_id)->slug;


        $applicant = Applicant::where('user_id', $request->user_id)->where('team_id', $request->team_id)->first();
        Member::create([
            'user_id' => $request->user_id,
            'team_id' => $applicant->team_id,
            'requirement_id' => $applicant->requirement_id
        ]);

        Storage::delete($applicant->cv);

        $applicant->delete();



        return response()->json(['link' => "http://127.0.0.1:8000/team-detail/$slug"]);
    }
}
