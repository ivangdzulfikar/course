<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;

class Click extends Component
{
    use WithPagination;

    #[Rule('required|min:6|max:255')]
    public $name = "";

    #[Rule('required|email|unique:users')]
    public $email = "";

    #[Rule('required|min:3')]
    public $password = "";

    public $search = "";

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function createUser()
    {
        $validate = $this->validate();

        User::create($validate);

        $this->reset('name', 'email', 'password');

        session()->flash('success', 'Post successfully updated.');
    }
    public function render()
    {
        $user = User::where('name', 'like', "%$this->search%")->paginate(5);
        $title = "Home";
        return view('livewire.click', [
            'title' => $title,
            'users' => $user
        ]);
    }
}
