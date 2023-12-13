<?php

namespace App\Livewire;

use Livewire\Component;

class Click extends Component
{
    public $count;

    public function handlerClick()
    {
        dump("click");
    }

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }
    
    public function render()
    {
        return view('livewire.click');
    }
}
