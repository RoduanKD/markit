<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();

        return view('message.index', compact('messages'));
    }

    public function show(Message $message)
    {
        return view('message.show', compact('message'));
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|min:3|max:255',
            'email' => 'required|email',
            'phone' => 'required|starts_with:9639|digits_between:12,12',
            'content' => 'required|string|min:5',
        ]);
        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->content = $request->content;
        $message->save();

        return redirect('');
    }

    public function destroy(Message $message)
    {
        $message->delete();
        $message = Message::all();

        return view('messages.index', compact('messages'));
    }
}
