<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;

class Click extends Component
{
    #[Rule('required|min:6|max:255')]
    public $name = "";

    #[Rule('required|email|unique:users')]
    public $email = "";

    #[Rule('required|min:3')]
    public $password = "";

    public function createUser()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'email_verified_at' => now(),
            'password' => Hash::make($this->password),
            'remember_token' => Str::random(10),
        ]);

        $this->reset('name', 'email', 'password');
    }
    public function render()
    {
        $user = User::all();
        $title = "Home";
        return view('livewire.click', [
            'title' => $title,
            'users' => $user
        ]);
    }
}
