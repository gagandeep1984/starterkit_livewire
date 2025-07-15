<div style="border: 1px solid black; padding: 0px 5px;">
    <h1>Counter Page</h1>
    Counter :

    <button wire:click="increment">+</button>
    <b style="padding: 0px 10px">{{ $counter }}</b>
    <button wire:click="decrement">-</button>
</div>