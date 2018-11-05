<?php

namespace JobBag\Application\Project;

use Doctrine\Common\Collections\Collection;
use JobBag\Domain\Entity\Project;
use JobBag\Domain\Repository\ProjectRepository;

class FetchProjectsList
{
    /**
     * @var ProjectRepository
     */
    private $projectRepository;

    /**
     * FetchProjectsList constructor.
     * @param ProjectRepository $projectRepository
     */
    public function __construct(ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    /**
     * @param string $since
     * @param null|int $limit
     * @return Collection|Project[]
     */
    public function fetchLatest(string $since, $limit = null): Collection
    {
        return $this->projectRepository->findLatest($since, $limit);
    }
}
