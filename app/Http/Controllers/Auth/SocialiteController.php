<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $socialUser = Socialite::driver('google')->user();

        $registeredUser = User::where('email', $socialUser->email)->first();

        if (! $registeredUser) {
            $user = User::updateOrCreate([
                'id' => $socialUser->id,
            ], [
                'name' => $socialUser->name,
                'email' => $socialUser->email,
                'password' => Hash::make('@passwordakunC3'),
                'remember_token' => $socialUser->token,
                'email_verified_at' => now(),
                'role' => 'user',
                // 'google_refresh_token' => $socialUser->refreshToken,
            ]);

            Auth::login($user);

            return redirect('/home');
        }
        Auth::login($registeredUser);

        return redirect('/home');
    }
}
