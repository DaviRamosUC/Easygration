<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProviderController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $socialUser = Socialite::driver($provider)->user();
         
        $user = User::where('email', $socialUser->email)->first();

        if(!isset($user) || empty($user)){
            $user = User::updateOrCreate([
                'provider_id' => $socialUser->id,
                'provider' => $provider,
            ], [
                'name' => $socialUser->name,
                'email' => $socialUser->email,
                'provider_token' => $socialUser->token,
            ]);
        }

        Auth::login($user);
 
        return redirect('/dashboard');
    }
}
