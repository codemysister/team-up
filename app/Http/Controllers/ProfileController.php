<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $notifications = DB::table('notifications')
            ->where('user_id', '=', $request->user()->id)
            ->get();
        $notificationStatus = count(DB::table('notifications')
            ->where('user_id', '=', $request->user()->id)
            ->where('is_read', '=', false)
            ->get());

        $profile = User::find($request->user()->id);

        return view('user.profile', compact('notifications', 'notificationStatus', 'profile'));
    }

    public function update(Request $request)
    {
        $profile = User::find($request->user()->id)->update([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'address' => $request->address
        ]);

        return redirect('/profile')->with('success', 'Profile has been updated');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'avatar' => 'mimes:jpg,jpeg,png'
        ]);

        if ($request->user()->avatar != null) {
            Storage::delete('public/' . $request->user()->avatar);
            $path = Storage::disk('public')->put('avatar', $request->file('avatar'));
            User::find(request()->user()->id)->update([
                'avatar' => $path
            ]);
        } else {
            $path = Storage::disk('public')->put('avatar', $request->file('avatar'));

            User::find(request()->user()->id)->update([
                'avatar' => $path
            ]);
        }


        return redirect('/profile')->with('success', 'Avatar has been updated');
    }

    public function remove(Request $request)
    {
        Storage::delete('public/' . $request->user()->avatar);
        User::find($request->user()->id)->update([
            'profile_image' => '/assets/img/user_profile_img.png',
            'avatar' => null

        ]);

        return response()->json(['status' => 'success']);
    }
}
