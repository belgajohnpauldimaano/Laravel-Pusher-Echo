<?php

namespace App\Http\Controllers;

use App\Events\MessagePosted;
use Illuminate\Http\Request;
use Auth;

class MessageController extends Controller
{
    public function MessageSent(Request $request)
    {
        // Get the current user
        $user = Auth::user();

        
        

        // Store the new message
        $message = $user->messages()->create([
            'message' => request()->get('message')
        ]);
        

        // Announce that a new message has been posted
        broadcast(new MessagePosted($message, $user))->toOthers();
        // event(new SampleMessagePosted());

        return ['status' => 'OK', 'user' => $user, 'message' => $message];
    }
}
