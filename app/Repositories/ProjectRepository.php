<?php

namespace App\Repositories;

use App\Models\Project;

class ProjectRepository
{
    private Project $project;

    public function __construct(Project $project)
    {
        $this->project = $project;
    }
}
