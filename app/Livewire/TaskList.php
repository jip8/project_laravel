<?php

namespace App\Livewire;

use Livewire\Component;

class TaskList extends Component
{
    public $tasks = [
        ['id' => 1,  'title' => 'Tarefa 1',  'completed' => false],
        ['id' => 2,  'title' => 'Tarefa 2',  'completed' => false],
        ['id' => 3,  'title' => 'Tarefa 3',  'completed' => false],
        ['id' => 4,  'title' => 'Tarefa 4',  'completed' => false],
        ['id' => 5,  'title' => 'Tarefa 5',  'completed' => false],
        ['id' => 6,  'title' => 'Tarefa 6',  'completed' => false],
        ['id' => 7,  'title' => 'Tarefa 7',  'completed' => false],
        ['id' => 8,  'title' => 'Tarefa 8',  'completed' => false],
        ['id' => 9,  'title' => 'Tarefa 9',  'completed' => false],
        ['id' => 10, 'title' => 'Tarefa 10', 'completed' => false],
    ];

    public function toggleTask($taskId)
    {
        foreach ($this->tasks as $key => $task) {
            if ($task['id'] === $taskId) {
                $this->tasks[$key]['completed'] = !$this->tasks[$key]['completed'];
                break;
            }
        }
    }

    public function getCompletedCountProperty()
    {
        return collect($this->tasks)->where('completed', true)->count();
    }

    public function render()
    {
        return view('livewire.task-list');
    }
}
