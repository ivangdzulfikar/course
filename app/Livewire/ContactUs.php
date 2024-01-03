<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactUsForm;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Form;

class ContactUs extends Component
{
    public ContactUsForm $form;
    
    public function submitForm()
    {
        $validated = $this->validate();

        session()->flash('success', 'email send');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-us');
    }
}
