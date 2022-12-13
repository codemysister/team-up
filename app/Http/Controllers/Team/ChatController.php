<?php

namespace App\Http\Controllers\Team;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use App\Models\Member;
use App\Models\Room;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function store(Request $request)
    {
        $member = Member::where('user_id', $request->user()->id)->where('team_id', $request->slug)->first();

        $room = Room::where('team_id', $member->team_id)->first();

        Conversation::create([
            'room_id' => $room->id,
            'member_id' => $member->id,
            'message' => $request->message
        ]);

        return redirect()->back();
    }
}
