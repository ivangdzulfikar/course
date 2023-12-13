<?php

namespace App\Livewire;

use Livewire\Component;

class Click extends Component
{
    public function handlerClick()
    {
        dump("click");
    }
    
    public function render()
    {
        return view('livewire.click');
    }
}
