<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Jukebox extends Component
{
    public bool $playing = false;

    #[On('play')]
    public function play()
    {
        Log::info(__METHOD__);
        $this->playing = true;
    }

    #[On('stop')]
    public function stop()
    {
        Log::info(__METHOD__);
        $this->playing = false;
    }

    public function render()
    {
        return view('livewire.jukebox');
    }
}
