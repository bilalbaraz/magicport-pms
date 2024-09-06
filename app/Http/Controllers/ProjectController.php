<?php

namespace App\Http\Controllers;

use App\Http\Requests\Project\CreateProjectRequest;
use App\Services\ProjectService;

class ProjectController extends Controller
{
    private ProjectService $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    public function index()
    {
        $projects = $this->projectService->getProjects();

        return response()->json(['success' => true, 'data' => $projects]);
    }

    public function create(CreateProjectRequest $request)
    {
        $data = $request->validated();
        $project = $this->projectService->createProject($data);

        return response()->json(['success' => true, 'project' => $project]);
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
