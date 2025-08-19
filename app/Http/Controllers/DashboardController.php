<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        $user = auth()->user();

        return view('dashboard', [
            'links' => $user->links()->orderBy('sort')->get(),
        ]);
    }
}
