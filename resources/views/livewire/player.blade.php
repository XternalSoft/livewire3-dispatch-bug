<div>
    @if(!$playing)
        <button wire:click="play">
            play
        </button>
    @else
        <button wire:click="stop">
            stop
        </button>
    @endif

</div>
