<div>
    <form wire:submit="createNewTodo" action="">

        <input wire:model.live="name" class="border border-sky-300" type="text">
        @error('name')
        <p class="text-red-500">{{ $message }}</p>
        @enderror
        
        <button class="p-3 bg-green-400">Create</button>
        @if (session('success'))
            <p class="p-3 bg-sky-400 text-white">{{ session('success') }}</p>
        @endif
    </form>

    <input wire:model.live="search" class="border border-sky-300" type="text">

    <ul>
        @foreach ($todos as $todo)
            <li>
                <a href="/">{{ $todo->name }}</a>
            </li>
        @endforeach
    </ul>
    {{ $todos->links() }}
</div>
