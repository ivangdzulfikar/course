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

    public function mount($search)
    {
        $this->search = $search;
    }

    public function placeholder()
    {
        return view('placeholder');
    }

    public function render()
    {   
        $user = User::latest()->where('name', 'like', "%$this->search%")->paginate(5);
        return view('livewire.user-list', [
            'users' => $user
        ]);
    }
}
