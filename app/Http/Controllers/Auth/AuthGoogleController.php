<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class AuthGoogleController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {


        $googlebUser = Socialite::driver('google')->user();

        $user = User::where('email', $googlebUser->getEmail())->first();

        if ($user) {
            $user->update([
                'google_id' => $googlebUser->id,
                'email_verified_at' => Carbon::now()->toDateTime()
            ]);
        } else {
            $user = User::create(
                [
                    'name' => $googlebUser->name,
                    'email' => $googlebUser->email,
                    'profile_image' => $googlebUser->getAvatar(),
                    'password' => Hash::make(Str::random(30)),
                    'email_verified_at' => Carbon::now()->toDateTime(),
                    'google_id' => $googlebUser->id
                ]
            );
        }


        Auth::login($user);

        return redirect('/team-list');
    }
}
