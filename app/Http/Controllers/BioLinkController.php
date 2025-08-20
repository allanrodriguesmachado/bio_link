<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BioLinkController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(User $user): View
    {
        $links = $user->links()->orderBy('sort', 'asc')->get();

        return view('bio_link', [
            'user' => $user,
            'link' => $links,
        ]);
    }
}
