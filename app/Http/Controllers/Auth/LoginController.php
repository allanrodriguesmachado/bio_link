<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\auth\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    public function auth(AuthRequest $request)
    {
        $credentials = $request->only('email', 'password');
        Log::info('Attempting login', $credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Log::info('Login successful');
            return to_route('welcome');
        }

        Log::warning('Login failed');
        return redirect('/login')->with('message', 'Usuário e senha inválidos');
    }


    public function dashboard()
    {
        return view('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
}
