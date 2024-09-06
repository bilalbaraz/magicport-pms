<?php

namespace App\Services;

use App\Models\Task;
use App\Repositories\TaskRepository;
use Illuminate\Database\Eloquent\Collection;

class TaskService
{
    private TaskRepository $taskRepository;

    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function createTask(array $taskData): ?Task
    {
        return $this->taskRepository->createTask($taskData);
    }

    public function getTasksByProjectId(int $projectId): Collection
    {
        return $this->taskRepository->getTasksByProjectId($projectId);
    }
}
