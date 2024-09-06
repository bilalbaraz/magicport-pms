<?php

namespace App\Http\Controllers;

use App\Repositories\ProjectService;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    private ProjectService $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    public function index()
    {
        return response()->json(['success' => true]);
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

