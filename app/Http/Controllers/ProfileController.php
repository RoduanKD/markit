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

    public function update(Request $request)
    {

        $validated = $request->validate([
            'firstname' => 'required|min:3|max:255|string',
            'lastname'  => 'required|min:3|max:255|string',
            'email'      => 'required|email|max:255',
            'phone'      => 'required|digits_between:10,10',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'
        ]);

        if ($validated['password']) {
            auth()->user()->update(['password' => Hash::make($validated['password'])]);
        }


        if ( $validated['email'] != auth()->user()->email) {
            auth()->user()->forceFill(['email_verified_at' => null]);
        }
        auth()->user()->update([
            'firstname' => $validated['firstname'],
            'lastname' => $validated['lastname'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'password' => Hash::make($validated['password'])
        ]);
        return redirect()->back()->with('success', 'Profile updated.');
    }
}
