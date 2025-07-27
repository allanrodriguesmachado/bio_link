<?php

namespace App\Http\Controllers;

use App\Models\Links;
use App\Models\User;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();

//        dd($links->all()->toArray());

//        /**
//         * @var User $user;
//         */
//        $user = auth()->user();
//        dd($user->links());
//
//        dd(auth()->id());

        return view('dashboard', [
            'links' => $user->links
        ]);
    }
}
