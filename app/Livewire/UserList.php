<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    public $search;

    #[On('create-user')]
    public function updateList($user = null)
    {

    }

    public function placeholder()
    {
        return view('placeholder');
    }

    public function render()
    {   
        sleep(3);
        $user = User::latest()->where('name', 'like', "%$this->search%")->paginate(5);
        return view('livewire.user-list', [
            'users' => $user
        ]);
    }
}
