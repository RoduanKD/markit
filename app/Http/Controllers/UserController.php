<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $adresses = Address::all();

        return view('users.index', compact('users' , 'addresses'));
    }
}
