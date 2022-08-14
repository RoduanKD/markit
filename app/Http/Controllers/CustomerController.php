<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function show()
    {
        $customers = User::all()->paginate(3);

        return view('customer.show', compact('customers'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([

        ]);
    }

    public function delete(User $user)
    {
        $user->delete();
    }
}
