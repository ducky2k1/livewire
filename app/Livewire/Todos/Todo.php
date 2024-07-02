<?php

namespace App\Livewire\Todos;

use Livewire\Component;
use Livewire\Attributes\On;

class Todo extends Component
{

    public $todoList = [];

    #[On('created_todo')]
    public function createdTodo($name)
    {
        $this->todoList[] = [
            'id' => uniqid(),
            'name' => $name,
            'completed' => false,
        ];
    }

    public function render()
    {
        return view('livewire.todos.todo');
    }
}
