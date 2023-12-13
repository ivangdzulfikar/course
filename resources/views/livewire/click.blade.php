<div>
    <h1>{{ $title }}</h1>
    <button wire:click="handleClick">Click</button>

    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
