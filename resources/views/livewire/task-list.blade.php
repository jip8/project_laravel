<div class="container">
    <style>
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .counter {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 25px;
            font-size: 18px;
            font-weight: bold;
        }
        .task-item {
            padding: 12px;
            margin-bottom: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
            display: flex;
            align-items: center;
            transition: background-color 0.3s;
            cursor: pointer;
        }
        .task-item:hover {
            background-color: #f0f0f0;
        }
        .task-item.completed {
            background-color: #e8f5e9;
        }
        .task-item input[type="checkbox"] {
            width: 20px;
            height: 20px;
            margin-right: 15px;
            cursor: pointer;
        }
        .task-item label {
            cursor: pointer;
            flex-grow: 1;
            font-size: 16px;
        }
        .task-item.completed label {
            text-decoration: line-through;
            color: #888;
        }
    </style>

    <h2>Lista de Tarefas</h2>

    <div class="counter">
        Tarefas Concluídas: {{ $this->completedCount }} de {{ count($tasks) }}
    </div>

    <div class="task-list">
        @foreach($tasks as $task)
            <div class="task-item {{ $task['completed'] ? 'completed' : '' }}">
                <input
                    type="checkbox"
                    id="task-{{ $task['id'] }}"
                    wire:click="toggleTask({{ $task['id'] }})"
                    {{ $task['completed'] ? 'checked' : '' }}
                >
                <label for="task-{{ $task['id'] }}">{{ $task['title'] }}</label>
            </div>
        @endforeach
    </div>
</div>
