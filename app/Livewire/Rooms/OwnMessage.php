<?php

namespace App\Livewire\Rooms;

use App\Models\Message;
use Livewire\Component;

class OwnMessage extends Component
{
    public Message $message;
    public function render()
    {
        return view('livewire.rooms.own-message');
    }
}
