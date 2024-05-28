<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EventChat
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $user;
    public $messenge;
    /**
     * Create a new event instance.
     */
    public function __construct($user, $messenge)
    {
        $this->user = $user;
        $this->messenge = $messenge;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn()
    {
        return     new PrivateChannel('chat-private.' . $this->user->id);
    }
    // Xử lý trong CONTROLLER
    public function create($id_conversation, $content, $messenge){
        $message = User::create([
            'conversation_id' => $id_conversation,
            'user_id' => $this->user->id,
            'content' => $content
        ]);

        broadcast(new EventChat($this->user, $messenge))->toOthers();
    }
}
