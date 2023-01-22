<?php

namespace App\Http\Controllers\Team;

use App\Events\NotificationSend;
use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\Category;
use App\Models\Conversation;
use App\Models\Member;
use App\Models\Notification;
use App\Models\Qualification;
use App\Models\Requirement;
use App\Models\Role;
use App\Models\Room;
use App\Models\Task;
use App\Models\Team;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $notifications = Notification::where('id', '=', $request->user()->id)
            ->latest()->get();
        $notificationStatus = count(Notification::where('user_id', '=', $request->user()->id)
            ->where('is_read', '=', false)
            ->get());

        if (request('searchKeyword')) {

            $teams = Team::with('category', 'requirements')->where('status', 'open')
                ->where('teams.name', 'like', "%" . request('searchKeyword') . "%")
                ->get();


            if (count($teams) > 0) {

                // $teams = Team::where('status', 'open')->get();
            } else {
                $teams = Team::with('category', 'requirements')->distinct()->where('status', 'open')
                    ->join('requirements', 'requirements.team_id', '=', 'teams.id')
                    ->select('teams.*', 'requirements.role')
                    ->where('requirements.role', 'like', "%" . request('searchKeyword') . "%")
                    ->get();
            }


            return view('user.team-list', compact('categories', 'teams', 'notifications', 'notificationStatus'));
        } else {
            $teams = Team::with('category', 'requirements')->where('status', 'open')->get();
        }
        return view('user.team-list', compact('categories', 'teams', 'notifications', 'notificationStatus'));
    }

    public function show(Request $request, $slug)
    {

        $tim = Team::where('slug', $slug)->first();
        $notifications = Notification::where('id', '=', $request->user()->id)->latest()
            ->get();

        $notificationStatus = count(Notification::where('user_id', '=', $request->user()->id)
            ->where('is_read', '=', false)
            ->get());



        return view('user.team-detail', compact('tim', 'notifications', 'notificationStatus'));
    }

    public function store(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('https://api.unsplash.com/photos/random', [
            'query' => [
                'client_id' => 'w0cwqf6C-Gsfzqu4aYIOOqCYihwLF48HQIZu6DdNdfA',
                'query' => 'technology',
                'w' => 300,
                'h' => 300
            ]
        ]);
        $image = json_decode($response->getBody()->getContents());
        $url = $image->urls->full;

        $team = Team::create([
            'uuid' => Str::uuid(),
            'name' => $request->name,
            'image' => $url,
            'description' => $request->description,
            'status' => 'closed',
            'category_id' => $request->category,
            'user_id' => $request->user()->id,
            'slug' => Str::slug($request->name) . '-' . rand(),
        ]);



        foreach ($request->requirement as $requirements) {


            $requirement = Requirement::create([
                'team_id' => $team->id,
                'role' => $requirements['role'],
                'salary' => $requirements['salary'],
                'color' => '#' . str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT)
            ]);

            foreach ($requirements['qualification'] as $qualification) {
                Qualification::create([
                    'requirement_id' => $requirement->id,
                    'description' => $qualification
                ]);
            }
        }

        $team->users()->attach(Auth::user());

        $role = Role::create([
            'team_id' => $team->id,
            'role' => 'leader',
            'color' => '#' . str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT)

        ]);

        Member::create([
            'user_id' => request()->user()->id,
            'role_id' => $role->id,
            'team_id' => $team->id
        ]);

        return redirect("/team-detail/$team->slug");
    }

    public function myTeam(Request $request)
    {
        // $user = Auth::user();
        // if ($user->hasRole('leader')) {
        //     $myteam = $user->teams;
        // } else {

        $myteam = User::with([
            'members' =>
            [
                'team' => ['requirements', 'category', 'owner']
            ]
        ])->where('id', '=', $request->user()->id)->get();
        // $myteam = DB::table('members')
        //     ->join('teams', 'teams.id', '=', 'members.team_id')
        //     ->where('members.user_id', $user->id)
        //     ->get();

        // }

        $myteam = $myteam->first()->members;


        $notifications = Notification::where('user_id', '=', $request->user()->id)->latest()
            ->get();

        $notificationStatus = count(Notification::where('user_id', '=', $request->user()->id)
            ->where('is_read', '=', false)
            ->get());


        return view('user.my-team', compact('myteam', 'notifications', 'notificationStatus'));
    }

    public function myTeamDetail(Request $request, $slug)
    {

        $tim = Team::with('requirements')->where('slug', $slug)->first();
        $isMember = Member::where('user_id', $request->user()->id)->where('team_id', $tim->id)->first();
        $isApplicant = Applicant::where('user_id', $request->user()->id)->where('team_id', $tim->id)->first();
        $owner = DB::table('teams')
            ->join('users', 'users.id', '=', 'teams.user_id')->first();

        if ($tim->status == 'closed' && ($isMember == null && $owner->user_id != $request->user()->id)) {
            return back();
        }
        $requirement = $tim->requirements;
        $member = DB::table('members')
            ->join('teams', 'teams.id', '=', 'members.team_id')
            ->join('users', 'users.id', '=', 'members.user_id')
            ->join('team_has_role', 'team_has_role.id', '=', 'members.role_id')
            ->where('members.team_id', '=', $tim->id)
            ->select('members.*', 'users.profile_image', 'users.name', 'users.email', 'team_has_role.*')
            ->get();

        $pelamar = DB::table('applicants')
            ->join('users', 'users.id', '=', 'applicants.user_id')
            ->join('requirements', 'requirements.id', '=', 'applicants.requirement_id')
            ->where('applicants.team_id', '=', $tim->id)
            ->get();

        $notifications = Notification::where('user_id', '=', $request->user()->id)->latest()
            ->get();

        $room = Room::where('team_id', $tim->id)->first();
        $currentMember = Member::where('user_id', $request->user()->id)->first();
        // dd($currentMember);
        // $conversations = Conversation::where('room_id', $room->id)->get();
        $conversations = DB::table('conversations')
            ->join('members', 'members.id', '=', 'conversations.member_id')
            ->join('users', 'users.id', '=', 'members.user_id')
            ->select('users.profile_image', 'users.id',  'users.name', 'conversations.*', 'members.user_id')
            ->where('conversations.channel', '=', $tim->uuid)->orderByRaw('conversations.created_at ASC')->get() ?? null;



        $task = Task::with('members', 'files')->where('team_id', '=', $tim->id)->latest()->get();

        foreach ($task as $t) {
            $t->start = Carbon::create($t->start)->isoFormat('dddd, D MMMM YYYY HH:mm');
            $t->end = Carbon::create($t->end)->isoFormat('dddd, D MMMM YYYY HH:mm');
        }
        $notificationStatus = count(Notification::where('user_id', '=', $request->user()->id)
            ->where('is_read', '=', false)
            ->get());


        return view('user.myteam-detail', compact('tim', 'requirement', 'conversations', 'room', 'currentMember', 'owner', 'member', 'pelamar', 'isMember', 'isApplicant', 'task', 'notifications', 'notificationStatus'));
    }

    public function fetchTeamDetail(Request $request, $slug)
    {

        $tim = Team::with('requirements')->where('slug', $slug)->first();

        $requirement = $tim->requirements;
        $member = DB::table('members')
            ->join('teams', 'teams.id', '=', 'members.team_id')
            ->join('users', 'users.id', '=', 'members.user_id')
            ->join('team_has_role', 'team_has_role.id', '=', 'members.role_id')
            ->where('members.team_id', '=', $tim->id)
            ->get();

        $pelamar = DB::table('applicants')
            ->join('users', 'users.id', '=', 'applicants.user_id')
            ->join('requirements', 'requirements.id', '=', 'applicants.requirement_id')
            ->where('applicants.team_id', '=', $tim->id)
            ->get();


        $owner = DB::table('teams')
            ->join('users', 'users.id', '=', 'teams.user_id')->first();


        $currentMember = Member::where('user_id', $request->user()->id)->first();

        // dd($currentMember);
        // $conversations = Conversation::where('room_id', $room->id)->get();
        $conversations = DB::table('conversations')
            ->join('members', 'members.id', '=', 'conversations.member_id')
            ->join('users', 'users.id', '=', 'members.user_id')
            ->where('conversations.channel', '=', $tim->slug)->get() ?? null;

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

        $team = Team::find($request->team_id);

        $applicant = DB::table('applicants')
            ->join('requirements', 'requirements.id', '=', 'applicants.requirement_id')
            ->where('applicants.user_id', $request->user_id)->where('applicants.team_id', $request->team_id)->first();

        $role = Role::where('role', '=', $applicant->role)->where('team_id', $request->team_id)->first();

        $requirement = Requirement::find($applicant->requirement_id)->first();

        if ($role) {
            Member::create([
                'user_id' => $request->user_id,
                'team_id' => $applicant->team_id,
                'role_id' => $role->id
            ]);
        } else {
            $role = Role::create([
                'team_id' => $applicant->team_id,
                'role' => $applicant->role,
                'color' => $requirement->color
            ]);

            Member::create([
                'user_id' => $request->user_id,
                'team_id' => $applicant->team_id,
                'role_id' => $role->id
            ]);
        }

        $notification = Notification::create([
            'user_id' => $request->user_id,
            'link' => url("/team-detail/$team->slug"),
            'message' => "Congratulations you are accepted in the $team->name team",
            'is_read' => false
        ]);

        broadcast(new NotificationSend($notification))->toOthers();


        Storage::delete('public/' . $applicant->cv);

        Applicant::where('user_id', $request->user_id)->where('team_id', $request->team_id)->delete();



        return response()->json(['link' => "http://127.0.0.1:8000/team-detail/$team->slug"]);
    }

    public function myTeamReject(Request $request)
    {

        $team = Team::find($request->team_id);

        $applicant = DB::table('applicants')
            ->join('requirements', 'requirements.id', '=', 'applicants.requirement_id')
            ->where('applicants.user_id', $request->user_id)->where('applicants.team_id', $request->team_id)->first();


        $notification = Notification::create([
            'user_id' => $request->user_id,
            'link' => url("/team-detail/$team->slug"),
            'message' => "Sorry, you don't meet our team's criteria ($team->name)",
            'is_read' => false
        ]);

        broadcast(new NotificationSend($notification))->toOthers();


        Storage::delete('public/' . $applicant->cv);

        Applicant::where('user_id', $request->user_id)->where('team_id', $request->team_id)->delete();



        return response()->json(['link' => "http://127.0.0.1:8000/team-detail/$team->slug"]);
    }
}
