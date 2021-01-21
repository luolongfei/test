<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /**
     * 将用户重定向到 GitHub 的授权页面
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('apple')->redirect();
    }

    /**
     * 从 GitHub 获取用户信息
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('apple')->user();
        dd($user);
        $t = 1;
        // $user->token;
    }
}
