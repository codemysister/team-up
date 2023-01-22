<?php

use App\Models\Member;
use App\Models\Team;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('team.{uuid}', function ($user, $uuid) {

    $tim = Team::where('uuid', $uuid)->get();

    $isMember = DB::table('members')->where('user_id', '=', $user->id)->where('team_id', '=', $tim[0]['id'])->get();

    return count($isMember) == 1 ? true : false;
});

Broadcast::channel('notification.{user_id}', function ($user, $user_id) {
    return $user->id == $user_id ? true : false;
});
