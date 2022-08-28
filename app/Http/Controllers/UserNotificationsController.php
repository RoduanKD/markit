<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;

class UserNotificationsController extends Controller
{

    public function index()
    {
        $notifications = auth()->user()->unreadnotifications;
        $notifications->each(fn ($notification) => $notification->markAsRead());

        return view('notifications.show', ['notifications' => $notifications]);
    }
}
