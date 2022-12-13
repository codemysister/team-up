<?php

namespace App\Http\Controllers\Team;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class MyTeamController extends Controller
{
    public function changeTeamName(Request $request, Team $team)
    {
        $request->validate([
            'team_name' => 'required'
        ]);

        $team->update([
            'name' => $request->team_name
        ]);

        return response()->json(['success' => true]);
    }

    public function changeDescName(Request $request, Team $team)
    {
        $request->validate([
            'description' => 'required'
        ]);

        $team->update([
            'description' => $request->description
        ]);

        return response()->json(['success' => true]);
    }
}
