<?php

namespace App\Repositories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;

class TaskRepository
{
    private Task $task;

    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    public function createTask(array $taskData): ?Task
    {
        return $this->task->create($taskData);
    }

    public function getTasksByProjectId(int $projectId): Collection
    {
        return $this->task->where('project_id', $projectId)->get();
    }
}
