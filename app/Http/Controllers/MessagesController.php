<?php
// app/Http/Controllers/MessagesController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessagesController extends Controller
{
    public function create()
    {
        $messages = Message::all();
        return view('messages.create', compact('messages'));
        return view('messages.create', [
            'errors' => session('errors'),
        ]);
    }
    

    public function store(Request $request)
    {
        $request->validate([    'name' => 'required|string|max:255',    'email' => 'required|email|max:255',    'message' => 'required|string|max:1000',], [    'name.required' => 'Please enter your name.',    'email.required' => 'Please enter your email address.',    'email.email' => 'Please enter a valid email address.',    'message.required' => 'Please enter a message.',]);

        return redirect()->route('messages.index');
    }

    public function index()
    {
        $messages = Message::all();
        return view('messages.create', compact('messages'));
    }
    
}    