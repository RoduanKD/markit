<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

use App\Notifications\PaymentRecieved;


class PaymentsController extends Controller
{

    public function create()
    {
    }

    public function store()
    {
        request()->user()->notify(new PaymentRecieved(10));
    }
}
