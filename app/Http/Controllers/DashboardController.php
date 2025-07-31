<?php

namespace App\Http\Controllers;

use App\Models\Links;
use App\Models\User;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();

        return view('dashboard', [
            'links' => $user->links()->orderBy('order')->get(),
        ]);
    }
}
