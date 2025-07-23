<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\auth\AuthRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(): object
    {
        return view('auth.login');
    }

    public function auth(AuthRequest $authRequest): RedirectResponse
    {
        if ($authRequest->attempt()) {
            return redirect()->intended('dashboard');
        }

        return back()->with('message', 'Usuário e senha inválidos')->onlyInput('email');
    }

    public function logout(): RedirectResponse
    {

    }
}
