<div>
    <h1>{{ $title }}</h1>

    <form action="" wire:submit="createUser">
        <input type="text" wire:model="name">
        <input type="email" wire:model="email">
        <input type="password" wire:model="password">

        <button>Tambah User</button>
    </form>

    <ul>
        @foreach ($users as $user)
        <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>