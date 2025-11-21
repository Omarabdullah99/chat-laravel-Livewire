<?php

namespace App\Livewire\Rooms;

use App\Models\Room;
use Livewire\Component;

class Messages extends Component
{
    public Room $room;

    public $messages;

    public function mount(Room $room)
    {
        $this->messages = $room->messages()->with('user')->latest()->get();
    }
    public function render()
    {
        return view('livewire.rooms.messages');
    }
}
