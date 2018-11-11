<?php

namespace JobBag\Domain\Repository;

use Doctrine\Common\Collections\Collection;
use JobBag\Domain\Entity\Project;

/**
 * @method Project|null find($id, $lockMode = null, $lockVersion = null)
 * @method Project|null findOneBy(array $criteria, array $orderBy = null)
 * @method Project[]    findAll()
 * @method Project[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
interface ProjectRepository
{
    /**
     * @param string $since Find all created since this value
     * @param int $limit  Find latest n elements. All in case value is null
     *
     * @return Collection|Project[]
     */
    public function findLatest(string $since, int $limit = null): Collection;

    /**
     * @param string $since Find all created since this value
     * @param int $professionId
     * @param int $limit Find latest n elements. All in case value is null
     *
     * @return Collection|Project[]
     */
    public function findLatestByProfessionId(string $since, int $professionId, int $limit = null): Collection;
}
