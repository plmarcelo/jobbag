<?php

namespace JobBag\Application\UseCase\Project;

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
     * @param null|int $professionId
     * @param null|int $limit
     * @return Collection|Project[]
     */
    public function fetchLatest(string $since, $professionId = null, $limit = null): Collection
    {
        if ($professionId !== null) {
            return $this->projectRepository->findLatestByProfessionId($since, $professionId, $limit);
        }

        return $this->projectRepository->findLatest($since, $limit);
    }

    /**
     * @param int $locarionId
     * @param int $professionId
     * @param string|null $since
     * @param int|null $limit
     * @return Collection
     */
    public function fetchNewByLocationAndProfession(
        int $locarionId,
        int $professionId,
        string $since = null,
        int $limit = null
    ): Collection {

    }
}
