<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        return view('auth.profile');
    }

    public function update(ProfileUpdateRequest $request)
    {

        if ($request['email'] != auth()->user()->email) {
            auth()->user()->forceFill(['email_verified_at' => null]);
        }

        auth()->user()->update($request->validated());

        if ($request['password']) {
            auth()->user()->update(['password' => Hash::make($request['password'])]);
        }
        return redirect()->back()->with('success', 'Profile updated.');
    }
}
