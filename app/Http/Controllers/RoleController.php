<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return view('user.role');
    }

    public function chooseRole(Request $request)
    {
        $user = $request->user();

        if ($request->role != 'leader' && $request->role != 'member') {
            return redirect()->back();
        } else {
            $user->assignRole($request->role);
            return redirect()->intended('/team-list');
        }
    }
}
