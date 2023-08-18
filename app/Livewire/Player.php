<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Player extends Component
{

    public bool $playing;

    public function play()
    {
        Log::info(__METHOD__);
        $this->dispatch('play');
    }

    public function stop()
    {
        Log::info(__METHOD__);
        $this->dispatch('stop');
    }

    public function render()
    {
        return view('livewire.player');
    }
}
