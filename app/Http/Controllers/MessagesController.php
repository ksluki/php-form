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
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->route('messages.index');
    }

    public function index()
    {
        $messages = Message::all();
        return view('messages.create', compact('messages'));
    }
    
}    
