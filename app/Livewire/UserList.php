<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Computed;
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

    
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount($search)
    {
        $this->search = $search;
    }

    public function placeholder()
    {
        return view('placeholder');
    }

    #[Computed()]
    public function users()
    {
        return User::latest()
                    ->where('name', 'like', "%$this->search%")
                    ->paginate(5);
    }
}
