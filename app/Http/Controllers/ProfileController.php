<?php

namespace App\Http\Controllers;


use App\Http\Requests\ProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile', [
            'user' => auth()->user(),
        ]);
    }

    public function update(ProfileRequest $request)
    {

        /**
         * User @user
         */
        $user = Auth::user();


        $user->fill($request->validated())->save();
//
//        $user::query()->where('id', auth()->id())->update([
//            'handler' => $request->handler,
//        ]);

        return redirect()->route('profile')->with([
            'success' => 'Profile updated successfully',
        ]);
    }
}
