<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Click extends Component
{

    public function handlClick()
    {
        dump("click");
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
