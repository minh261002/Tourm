<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\SendEmailRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\ClientResetLinkMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

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
            return redirect()->route('home')->with('success', 'Xin chào, ' . auth()->guard('web')->user()->name . '!');
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

    public function logout()
    {
        auth()->guard('web')->logout();
        return redirect()->route('home')->with('success', 'Đăng xuất thành công.');
    }

    public function forgotPassword()
    {
        return view('client.auth.forgot-password');
    }

    public function sendEmailResetLink(SendEmailRequest $request)
    {
        $email = $request->email;
        $time = $request->time;
        $device = $request->device;

        $user = User::where('email', $email)->first();
        if (!$user) {
            return back()->with('error', 'Email không tồn tại.');
        }

        $token = Str::random(60);
        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $email],
            ['token' => $token, 'created_at' => now()]
        );

        Mail::to($email)->send(new ClientResetLinkMail($user->name, $token, $time, $device, $email));

        return back()->with('success', 'Link đặt lại mật khẩu đã được gửi vào email của bạn.');
    }

    public function resetPassword()
    {
        return view('client.auth.reset-password');
    }
}