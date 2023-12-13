<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class Click extends Component
{
    public $name = "";
    public $email = "";
    public $password = "";

    public function createUser()
    {
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
