<?php

namespace App\Http\Controllers\MyTeam;

use App\Http\Controllers\Controller;
use App\Models\Qualification;
use App\Models\Requirement;
use App\Models\Team;
use Illuminate\Http\Request;

class RequirementController extends Controller
{
    public function store(Request $request)
    {

        $team = Team::where('slug', '=', $request->currentTeam)->first();

        foreach ($request->requirements as $requirement) {


            $new_requirement = Requirement::create([
                'team_id' => $team->id,
                'role' => $requirement['role'],
                'color' => '#FFF'
            ]);

            foreach ($requirement['qualification'] as $qualification) {
                Qualification::create([
                    'requirement_id' => $new_requirement->id,
                    'description' => $qualification
                ]);
            }
        }

        return response()->json(['success' => true]);
    }

    public function fetch(Team $team)
    {
        if (request('id')) {
            $requirement = Requirement::where('id', request('id'))->first();
            $qualifications = Qualification::where('requirement_id', '=', $requirement->id)->get();
            return response()->json(['requirement' => $requirement, 'qualifications' => $qualifications]);
        }

        $requirements = [];

        foreach ($team->requirements as $requirement) {

            $arr = [];
            $arr['role'] = $requirement->role;
            $arr['id'] = $requirement->id;


            foreach ($requirement->qualification as $qualification) {
                $arr['qualification'][] = array('id' => $qualification["id"], 'value' => $qualification["description"]);
            }

            $requirements[] = $arr;
        }
        return response()->json(['requirements' => $requirements]);
    }

    public function show(Requirement $requirement)
    {
        return response()->json(['requirement' => $requirement->qualification]);
    }

    public function update(Request $request)
    {
        $requirement = Requirement::with('qualification')->where('id', request('id'))->first();
        foreach ($request->requirements["qualification"] as $qualification) {

            if ($qualification["id"] == null) {
                Qualification::create([
                    'requirement_id' => $requirement->id,
                    'description' => $qualification["value"]
                ]);
            } else {
                Qualification::find($qualification["id"])->update([
                    'description' => $qualification["value"]
                ]);
            }
        }

        return response()->json(['success' => true]);
    }

    public function destroyQualification()
    {
        $qualification = Qualification::where('id', request('id'))->delete();
        return response()->json(['success' => true]);
    }
}
