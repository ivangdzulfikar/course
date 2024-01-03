<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;

class ContactUsForm extends Form
{
    #[Rule('required|min:5|max:255')]
    public $email;
    #[Rule('required|min:5|max:255')]
    public $subject;
    #[Rule('required|min:5|max:255')]
    public $message;
}
