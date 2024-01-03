<div class="border-t-8 border-sky-400 shadow-md px-8 pb-3 rounded-b-xl">
    @if (session('success'))

    <span class="bg-green-600 text-white px-3 py-1 pb-2 rounded text-center font-medium inline-block">
        {{ session('success') }}
    </span>
    @endif

    <h2 class="text-center font-medium text-2xl mt-5 mb-8">Registration</h2>

    <form action="" wire:submit="createUser" class="flex flex-col my-3">

        {{-- username --}}
        <label for="name" class="self-start text-sm pl-1 mt-3 mb-1">Name</label>
        <input
            class="bg-gray-100 w-full hover:bg-gray-200 rounded py-2 px-3 text-sm focus:outline-sky-500 text-gray-900"
            type="text" wire:model.live.debounce.250ms="name" placeholder="Unsername" id="name" autocomplete>
        @error('name')
        <span class="text-red-700 text-xs self-start">{{ $message }}</span>
        @enderror

        {{-- email --}}
        <label for="email" class="self-start text-sm pl-1 mt-3 mb-1">Email</label>
        <input
            class="bg-gray-100 w-full hover:bg-gray-200 rounded py-2 px-3 text-sm focus:outline-sky-500 text-gray-900"
            type="email" wire:model.live.debounce.250ms="email" placeholder="Email" id="email">
        @error('email')
        <span class="text-red-700 text-xs self-start">{{ $message }}</span>
        @enderror

        {{-- password --}}
        <label for="password" class="self-start text-sm pl-1 mt-3 mb-1">Password</label>
        <input
            class="bg-gray-100 w-full hover:bg-gray-200 rounded py-2 px-3 text-sm focus:outline-sky-500 text-gray-900"
            type="password" wire:model.live.debounce.250ms="password" placeholder="Password" id="password">
        @error('password')
        <span class="text-red-700 text-xs self-start">{{ $message }}</span>
        @enderror

        {{-- image --}}
        <label for="image" class="self-start text-sm pl-1 mt-3 mb-1">Image</label>
        <input wire:model="image" accept="image/png, image/jpeg"
            class="bg-gray-100 w-full hover:bg-gray-200 rounded py-2 px-3 text-sm focus:outline-sky-500 text-gray-900"
            type="file" id="image">
        @if ($image)

        <img class="w-10 rounded self-start mt-3" src="{{ $image->temporaryUrl() }}" alt="">

        @endif

        @error('image')
        <span class="text-red-700 text-xs self-start">{{ $message }}</span>
        @enderror

        <div wire:loading wire:target="image">
            <span class="text-green-500">Uploading...</span>
        </div>

        <div class="flex items-center self-end gap-3 mt-6">
            <button wire:click.prevent="reloadList" class="hover:bg-sky-700 ease-in duration-100 w-36 py-2 px-6 bg-sky-400 text-white rounded-md">Reload List</button>

            <div wire:loading.delay>
                <span class="text-green-500">Processing...</span>
            </div>

            <button
                wire:loading.attr="disabled"
                wire:loading.class="bg-gray-400 hover:bg-gray-400"
                class="hover:bg-sky-700 ease-in duration-100 w-36 py-2 px-6 bg-sky-400 text-white rounded-md">Tambah
                User
            </button>

        </div>
    </form>

</div>