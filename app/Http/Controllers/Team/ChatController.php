<?php

namespace App\Http\Controllers\Team;

use App\Events\MessageSent;
use App\Http\Controllers\Controller;
use App\Models\Conversation;
use App\Models\Member;
use App\Models\Room;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{


    public function store(Request $request)
    {
        $team = Team::where('slug', '=', $request->currentTeam)->first();
        $member = Member::where('user_id', $request->user()->id)->where('team_id', $team->id)->first();

        // $room = Room::where('team_id', $member->team_id)->first();

        $chat = Conversation::create([
            'channel' => $team->uuid,
            'member_id' => $member->id,
            'message' => $request->chat
        ]);
        $chat = DB::table('conversations')
            ->join('members', 'members.id', '=', 'conversations.member_id')
            ->join('users', 'users.id', '=', 'members.user_id')
            ->where('conversations.id', '=', $chat->id)
            ->select('users.profile_image', 'users.name', 'conversations.*')
            ->get() ?? null;

        broadcast(new MessageSent($chat))->toOthers();

        $chat[0]->hours = Carbon::create($chat[0]->created_at)->isoFormat('HH:mm');


        return response()->json(['chat' => $chat]);
    }
}
