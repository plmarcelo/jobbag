<?php

namespace JobBag\Application\UseCase\Project;

use Doctrine\Common\Collections\Collection;
use JobBag\Application\UseCase\RequestInterface;
use JobBag\Application\UseCase\ResponseInterface;
use JobBag\Application\UseCase\UseCaseInterface;
use JobBag\Domain\Entity\Project;
use JobBag\Domain\Repository\ProjectRepository;

class SearchNewProjectsUseCase implements UseCaseInterface
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
     * @param RequestInterface|null|SearchNewProjectRequest $request
     * @return ResponseInterface
     */
    public function execute(?RequestInterface $request): ResponseInterface
    {
        if ($request->getProfessionId() !== null) {
            return $this->projectRepository->findLatestByProfessionId(
                $request->getSince(),
                $request->getProfessionId(),
                $request->getLimit()
            );
        }

        return $this->projectRepository->findLatest($request->getSince(), $request->getLimit());
    }
}
