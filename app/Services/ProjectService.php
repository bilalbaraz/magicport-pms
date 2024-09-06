<?php

namespace App\Services;
use App\Models\Project;
use App\Repositories\ProjectRepository;
use Illuminate\Database\Eloquent\Collection;

class ProjectService
{
    private ProjectRepository $projectRepository;

    public function __construct(ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    public function getProjects(): Collection
    {
        return $this->projectRepository->getProjectsWithoutTasks();
    }

    public function createProject(array $projectData): ?Project
    {
        return $this->projectRepository->createProject($projectData);
    }
}
