<?php

namespace App\Http\Livewire;
use App\Task;
use Livewire\Component;

class IndexTask extends Component
{
    protected $listeners = [
        'IndexTask'
    ];
    public function render()
    {
        $task = Task::orderby('id','desc')->limit(1)->get();
        return view('livewire.index-task', ['task' => $task]);
    }

    public function IndexArtikel($task){

    }
}

