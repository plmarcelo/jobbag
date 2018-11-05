<?php

namespace JobBag\Domain\Repository;

use Doctrine\Common\Collections\Collection;
use JobBag\Domain\Entity\Project;

interface ProjectRepository
{
    /**
     * @param string $since Find all created since this value
     * @param int $limit  Find latest n elements. All in case value is null
     *
     * @return Collection|Project[]
     */
    public function findLatest(string $since, int $limit = null): Collection;
}
