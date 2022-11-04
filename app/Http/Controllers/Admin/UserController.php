<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DataGrid\UsersGrid;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function fetchDataTable()
    {
        $users = User::all()
            ->transform(function ($user) {
                return [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                ];
            });

        return response()->json($users);
    }

    public function index()
    {
        return view('admin.users');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed:password_confirmation',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'email_verified_at' => Carbon::now(),
        ]);
        return response()->json(['status' => 'success']);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return response()->json(['user' => $user]);
    }

    public function update($id, Request $request)
    {

        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return response()->json(['status' => 'success']);
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return response()->json(['status' => 'success']);
    }
}
