<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function index(): View
    {
        return view('profile', [
            'user' => auth()->user(),
        ]);
    }

    public function update(ProfileRequest $request): RedirectResponse
    {
        /**
         *   @var User $user
         */
        $user = Auth::user();

        $file = $request->photo;
        $file->store('photos');

        $user->fill($request->validated())->save();

        return redirect()->route('profile')->with([
            'success' => 'Profile updated successfully',
        ]);
    }
}
