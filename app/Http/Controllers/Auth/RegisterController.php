<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function save(Request $request): void
    {
        $register = new User();
        $register->name = $request->name;
        $register->email = $request->email;
        $register->password = $request->password;
        $register->email_verified_at = Carbon::now();

        $register->save();
    }
}
