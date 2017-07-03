<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

use App\Message;
use App\User;

class MessagePosted implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    protected $user;
    protected $message;

    public function __construct($message, User $user)
    {
        $this->user = $user;
        $this->message = $message;
    }

    public function broadcastWith()
    {
        // This must always be an array. Since it will be parsed with json_encode()
        return [
            'message' => $this->message->message,
            'user' => $this->user
        ];
    }

    // public function broadcastAs()
    // {
    //     return 'newMessage';
    // }

    public function broadcastOn()
    {
        //return new Channel('messages');
        return new PresenceChannel('messages');
    }
}
