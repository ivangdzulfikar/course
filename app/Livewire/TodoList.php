<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class TodoList extends Component
{
    use WithPagination;

    #[Rule('required|min:3|max:50')]
    public $name;

    public $search;
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function createNewTodo()
    {
        $validated = $this->validate();

        Todo::create($validated);

        session()->flash('success', 'Success');

        $this->reset('name');
    }

    public function render()
    {
        $todos = Todo::latest()->where('name', 'like', "%$this->search%")->paginate(10);

        return view('livewire.todo-list', [
            'todos' => $todos
        ]);
    }
}
