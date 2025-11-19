<?php

namespace App\Livewire;

use Livewire\Component;

class RoomList extends Component
{
    public $rooms;

    // public function mount()
    // {
    //     $this->rooms = Room::query()
    //         ->whereBelongsTo(Auth::user())
    //         ->latest()
    //         ->get();

    //     // $this->rooms = Auth::user()
    //     //     ->rooms()
    //     //     ->latest()
    //     //     ->get();
    // }
    public function render()
    {
        return view('livewire.room-list');
    }
}
