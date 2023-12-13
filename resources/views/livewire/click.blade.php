<div>
    <h1 class="underline">{{ $title }}</h1>

    <form action="" wire:submit="createUser" class="flex flex-col gap-2 my-3 w-80">
        <input wire class="bg-gray-100 hover:bg-gray-200 rounded py-2 px-3 text-sm focus:outline-sky-500 text-gray-900" type="text"
            wire:model="name" placeholder="Unsername">
            @error('name')
                <span class="text-red-700 text-xs">{{ $message }}</span>    
            @enderror
        <input class="bg-gray-100 hover:bg-gray-200 rounded py-2 px-3 text-sm focus:outline-sky-500 text-gray-900" type="email"
            wire:model="email" placeholder="Email">
            @error('email')
            <span class="text-red-700 text-xs">{{ $message }}</span>    
        @enderror
        <input class="bg-gray-100 hover:bg-gray-200 rounded py-2 px-3 text-sm focus:outline-sky-500 text-gray-900" type="password"
            wire:model="password" placeholder="Password">
            @error('password')
            <span class="text-red-700 text-xs">{{ $message }}</span>    
        @enderror

        <button class="hover:bg-sky-700 ease-in duration-100 w-36 ml-auto py-2 px-6 bg-sky-400 text-white rounded-md">Tambah User</button>
    </form>

    {{-- user List --}}
    <div class="bg-gray-50 rounded-xl shadow p-3">
        <h2 class="text-2xl text-center underline font-medium mb-6">User List</h2>
        <ul>
            @foreach ($users as $user)
            <li class="bg-white my-3 p-3 rounded shadow hover:shadow-lg hover:py-4 ease-in duration-75">{{ $user->name }}</li>
            @endforeach
        </ul>
    </div>
</div>