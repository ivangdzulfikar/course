{{-- User List --}}
<div class="bg-gray-50 rounded-xl shadow">

    {{-- Search --}}
    <div class="flex justify-between items-center rounded-t-xl p-3 bg-gray-300">
        <h2 class="text-2xl text-center font-medium">User jkjh List</h2>
        <input class="bg-gray-100 hover:bg-gray-200 rounded py-2 px-3 text-sm focus:outline-sky-500 text-gray-900"
            wire:model.live="search" type="text" placeholder="Search here...">
    </div>

    <ul class="px-6 py-3">
        <li>{{ $users->total() }}</li>
        @if ($users->count(0))

        @foreach ($users as $user)
        <li
            class="bg-white my-3 p-3 rounded shadow hover:shadow-lg hover:bg-gray-100 origin-center ease-in duration-75">
            {{ $user->name }}
        </li>
        @endforeach
        @else
        <div class="text-center text-lg px-10">Not Found...</div>
        @endif
    </ul>

    <div class="p-3">
        {{ $users->links() }}
    </div>

</div>