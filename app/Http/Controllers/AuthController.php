<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('client.auth.login');
    }

    public function handleLogin(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->boolean('remember');

        if (auth()->guard('web')->attempt($credentials, $remember)) {
            if (!auth()->guard('web')->user()->hasVerifiedEmail()) {
                auth()->guard('web')->user()->sendEmailVerificationNotification();

                auth()->guard('web')->logout();
                return redirect()->route('verification.verify')->with('info', 'Vui lòng xác thực email để tiếp tục.');
            }

            return redirect()->route('home');
        }

        return back()->with('error', 'Thông tin đăng nhập không chính xác.');
    }

    public function register()
    {
        return view('client.auth.register');
    }

    public function handleRegister(RegisterRequest $request)
    {
        $data = $request->only('name', 'email', 'password');
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);
        auth()->guard('web')->login($user);

        return redirect()->route('home')->with('success', 'Xin chào, ' . $user->name . '!');
    }
}
