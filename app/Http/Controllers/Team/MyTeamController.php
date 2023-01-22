<?php

namespace App\Http\Controllers\Team;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MyTeamController extends Controller
{
    public function changeTeamName(Request $request, Team $team)
    {
        $request->validate([
            'team_name' => 'required'
        ]);

        $team->update([
            'name' => $request->team_name,
            'slug' => Str::slug($request->team_name) . '-' . rand()
        ]);



        return response()->json(['success' => true, 'slug' => $team->slug, 'new_name' => $team->name]);
    }

    public function changeDescName(Request $request, Team $team)
    {
        $request->validate([
            'description' => 'required'
        ]);

        $team->update([
            'description' => $request->description
        ]);

        return response()->json(['success' => true, 'new_desc' => $team->description]);
    }



    public function updateStatusTeam(Request $request, Team $team)
    {

        if ($request->status == 'closed') {
            $team->update(['status' => 'open']);
            return response()->json(['success' => true, 'status' => 'open']);
        } else {
            $team->update(['status' => 'closed']);
            return response()->json(['success' => true, 'status' => 'closed']);
        }
    }
}
