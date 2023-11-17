<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;

class GoogleLoginController extends Controller
{
    public function GoogleLogin(){
        return Socialite::driver('google')->redirect();

    }

    public function GoogleCallback(){
        $user = Socialite::driver('google')->user();
        dd($user);

    }
}
