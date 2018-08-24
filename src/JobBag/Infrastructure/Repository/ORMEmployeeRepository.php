<?php

namespace JobBag\Infrastructure\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use JobBag\Domain\Entity\Employee;
use JobBag\Domain\Repository\EmployeeRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Employee|null find($id, $lockMode = null, $lockVersion = null)
 * @method Employee|null findOneBy(array $criteria, array $orderBy = null)
 * @method Employee[]    findAll()
 * @method Employee[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ORMEmployeeRepository extends ServiceEntityRepository implements EmployeeRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Employee::class);
    }

    /**
     * @param string $provinceId
     * @param int $professionId
     * @param string|null $languageId
     * @return ArrayCollection<Employee>
     */
    public function findByProvinceIdAndProfessionId($provinceId, $professionId, $languageId = null)
    {
        $qb = $this->createQueryBuilder('e');
        $sqb = $this->_em->createQueryBuilder();

        $result = $qb->select('DISTINCT e')
            ->join('e.person', 'p', 'WITH', 'p = e.person')
            ->join('e.experience', 'ex', 'WITH', 'ex.employee = e')
            ->where('p.province = :provinceId')
            ->andWhere('ex.profession = :professionId')
            ->setParameter('provinceId', $provinceId)
            ->setParameter('professionId', $professionId)
            ->orderBy('e.person', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();

        return new ArrayCollection($result);
    }
}
