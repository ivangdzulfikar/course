<div>
    @if (session('success'))

    <span class="bg-green-600 text-white px-3 py-1 pb-2 rounded text-center font-medium inline-block">
        {{ session('success') }}
    </span>
    @endif
    <h1 class="underline">{{ $title }}</h1>

    <form action="" wire:submit="createUser" class="flex flex-col gap-2 my-3 w-80">
        <input class="bg-gray-100 hover:bg-gray-200 rounded py-2 px-3 text-sm focus:outline-sky-500 text-gray-900"
            type="text" wire:model.live.debounce.250ms="name" placeholder="Unsername">
        @error('name')
        <span class="text-red-700 text-xs">{{ $message }}</span>
        @enderror
        <input class="bg-gray-100 hover:bg-gray-200 rounded py-2 px-3 text-sm focus:outline-sky-500 text-gray-900"
            type="email" wire:model.live.debounce.250ms="email" placeholder="Email">
        @error('email')
        <span class="text-red-700 text-xs">{{ $message }}</span>
        @enderror
        <input class="bg-gray-100 hover:bg-gray-200 rounded py-2 px-3 text-sm focus:outline-sky-500 text-gray-900"
            type="password" wire:model.live.debounce.250ms="password" placeholder="Password">
        @error('password')
        <span class="text-red-700 text-xs">{{ $message }}</span>
        @enderror

        <button
            class="hover:bg-sky-700 ease-in duration-100 w-36 ml-auto py-2 px-6 bg-sky-400 text-white rounded-md">Tambah
            User</button>
    </form>

    {{-- user List --}}
    <div class="bg-gray-50 rounded-xl shadow">

        {{-- Search --}}
        <div class="flex justify-between items-center rounded-t-xl p-3 bg-gray-300">
            <h2 class="text-2xl text-center font-medium">User List</h2>
            <input class="bg-gray-100 hover:bg-gray-200 rounded py-2 px-3 text-sm focus:outline-sky-500 text-gray-900"
                wire:model.live="search" type="text" placeholder="Search...">
        </div>

        <ul class="px-6 py-3">
            @if ($users->count(0))
                
            @foreach ($users as $user)
            <li class="bg-white my-3 p-3 rounded shadow hover:shadow-lg hover:py-4 ease-in duration-75">
                {{ $user->name }}
            </li>
            @endforeach
            @else
            <div class="text-center text-lg px-10">Not Found...</div> 
            @endif
        </ul>

        {{ $users->links() }}

    </div>
</div>