<div class="border-t-8 border-sky-400 shadow-md px-8 w-1/3 rounded-b-xl">
    @if (session('success'))

    <span class="bg-green-600 text-white px-3 py-1 pb-2 rounded text-center font-medium inline-block">
        {{ session('success') }}
    </span>
    @endif

    <h2 class="text-center font-medium text-2xl mt-5 mb-8">Registration</h2>

    <form action="" wire:submit="createUser" class="flex flex-col m-auto gap-1 my-3 items-center">

        {{-- username --}}
        <label for="name" class="self-start text-sm pl-1 mt-3">Name</label>
        <input
            class="bg-gray-100 w-full hover:bg-gray-200 rounded py-2 px-3 text-sm focus:outline-sky-500 text-gray-900"
            type="text" wire:model.live.debounce.250ms="name" placeholder="Unsername">
        @error('name')
        <span class="text-red-700 text-xs self-start">{{ $message }}</span>
        @enderror

        {{-- email --}}
        <label for="name" class="self-start text-sm pl-1 mt-3">Email</label>
        <input
            class="bg-gray-100 w-full hover:bg-gray-200 rounded py-2 px-3 text-sm focus:outline-sky-500 text-gray-900"
            type="email" wire:model.live.debounce.250ms="email" placeholder="Email">
        @error('email')
        <span class="text-red-700 text-xs self-start">{{ $message }}</span>
        @enderror

        {{-- password --}}
        <label for="name" class="self-start text-sm pl-1 mt-3">Password</label>
        <input
            class="bg-gray-100 w-full hover:bg-gray-200 rounded py-2 px-3 text-sm focus:outline-sky-500 text-gray-900"
            type="password" wire:model.live.debounce.250ms="password" placeholder="Password">
        @error('password')
        <span class="text-red-700 text-xs self-start">{{ $message }}</span>
        @enderror

        {{-- image --}}
        @if ($image)
        
        @foreach ($users as $user)
        <img class="w-44 self-start m-t[-10px]" src="{{ asset("storage/$user->image") }}" alt="">
        
        @endforeach
        @endif

        <label for="name" class="self-start text-sm pl-1 mt-3">Image</label>
        <input wire:model="image" accept="image/png, image/jpeg"
            class="bg-gray-100 w-full hover:bg-gray-200 rounded py-2 px-3 text-sm focus:outline-sky-500 text-gray-900"
            type="file">
        @error('image')
        <span class="text-red-700 text-xs self-start">{{ $message }}</span>
        @enderror

     
        <button
            class="mt-6 hover:bg-sky-700 ease-in duration-100 w-36 ml-auto py-2 px-6 bg-sky-400 text-white rounded-md">Tambah
            User
        </button>
    </form>

</div>