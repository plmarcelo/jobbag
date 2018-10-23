<?php

namespace JobBag\Infrastructure\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Query\ResultSetMapping;
use JobBag\Domain\Entity\Location;
use JobBag\Domain\Repository\LocationRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Location|null find($id, $lockMode = null, $lockVersion = null)
 * @method Location|null findOneBy(array $criteria, array $orderBy = null)
 * @method Location[]    findAll()
 * @method Location[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ORMLocationRepository extends ServiceEntityRepository implements LocationRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Location::class);
    }

    /**
     * @param array $values
     * @return ArrayCollection|Location[]
     */
    public function findIn(array $values = []): ArrayCollection
    {
        $queryBuilder = $this->createQueryBuilder('l');

        $result = $queryBuilder->select()
            ->where($queryBuilder->expr()->in('l.id', $values))
            ->andWhere($queryBuilder->expr()->eq('l.active', 1))
            ->getQuery()
            ->getResult();

        return new ArrayCollection($result);
    }

    /**
     * Busca las localidades ascendientes y descendientes de la localidad especificada
     * @param int $locationId
     * @param bool $onlyActives
     * @return ArrayCollection
     */
    public function findRelatives(int $locationId, bool $onlyActives = true): ArrayCollection
    {
        $querySyntax = <<<SQL
SELECT id, l.name, l.parent_id
FROM (SELECT * FROM location ORDER BY parent_id DESC, id DESC) l, (SELECT @al := :locationId) initialisation
WHERE FIND_IN_SET(id, @al)
AND length(@al := CONCAT(@al, ',', COALESCE(parent_id, 0)))
UNION
SELECT l.id, l.name, l.parent_id
FROM (SELECT * FROM location ORDER BY parent_id, id) l, (SELECT @dl := :locationId) initialisation
WHERE FIND_IN_SET(parent_id, @dl)
AND LENGTH(@dl := CONCAT(@dl, ',', id))
ORDER BY name;
SQL;


        $connection = $this->getEntityManager()->getConnection();
        $query = $connection->prepare($querySyntax);
        $query->bindParam('locationId', $locationId);
        $query->execute();
        $result = $query->fetchAll();


        $resultSetMapping = new ResultSetMapping;
//        $resultSetMapping->addEntityResult(Location::class, 'l');
//
//        $query = $this->getEntityManager()->createNativeQuery($querySyntax, $resultSetMapping);
//        $query->setParameter(':locationId', $locationId);
//        $locations = $query->getResult();

        $result = [];


// Buscar parientes
//SELECT id, name, parent_id
//FROM (SELECT * FROM location ORDER BY parent_id DESC, id DESC) locations_sorted, (SELECT @pv := 46) initialisation
//WHERE FIND_IN_SET(id, @pv)
//AND length(@pv := CONCAT(@pv, ',', COALESCE(parent_id, 0)));

// Buscar descendientes
//SELECT id, name, parent_id
//FROM (SELECT * FROM location ORDER BY parent_id, id) locations_sorted, (SELECT @pv := 3) initialisation
//WHERE FIND_IN_SET(parent_id, @pv)
//AND LENGTH(@pv := CONCAT(@pv, ',', id));
        return new ArrayCollection($result);
    }
}
