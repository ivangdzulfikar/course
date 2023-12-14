<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

class FormRegister extends Component
{
    use WithFileUploads;

    #[Rule('required|min:6|max:255')]
    public $name;

    #[Rule('required|email|unique:users')]
    public $email;

    #[Rule('required|min:3')]
    public $password;

    #[Rule('nullable|sometimes|image|max:1024')]
    public $image;

    public function createUser()
    {
        $validated = $this->validate();

        if ($this->image) {
            $validated['image'] = $this->image->store('uploads', 'public');
        }

        $user = User::create($validated);

        $this->reset('name', 'email', 'password');

        session()->flash('success', 'Post successfully updated.');

        $this->dispatch('create-user', $user);
    }

    public function reloadList()
    {
        $this->dispatch('create-user');
    }

    public function render()
    {
        $users = User::all();
        return view('livewire.form-register', [
            'users' => $users
        ]);
    }
}
