<?php

namespace App\Http\Controllers;

use App\Models\User;

class DashboardController extends Controller
{
    public function __invoke()
    {
//        /**
//         * @var User $user;
//         */
//        $user = auth()->user();
//        dd($user->links());
//
//        dd(auth()->id());

        return view('dashboard');
    }
}
