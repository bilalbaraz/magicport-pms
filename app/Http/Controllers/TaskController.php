<?php

namespace App\Http\Controllers;

use App\Services\TaskService;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private TaskService $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function index(Request $request)
    {
        $projectId = $request->get('project_id');
        $tasks = $this->taskService->getTasksByProjectId($projectId);

        return response()->json(['success' => true, 'tasks' => $tasks]);
    }

    public function create()
    {
        return response()->json(['success' => true]);
    }


    public function update()
    {
        return response()->json(['success' => true]);
    }

    public function delete()
    {
        return response()->json(['success' => true]);
    }
}
