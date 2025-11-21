<?php

namespace App\Livewire\Rooms;

use App\Models\Message as ModelsMessage;
use Livewire\Component;

class Message extends Component
{
    public ModelsMessage $message;
    public function render()
    {
        return view('livewire.rooms.message');
    }
}
