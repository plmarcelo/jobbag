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
class DoctrineEmployeeRepository extends ServiceEntityRepository implements EmployeeRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Employee::class);
    }

//    /**
//     * @return Employee[] Returns an array of Employee objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Employee
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    /**
     * @param string $provinceId
     * @param int $professionId
     * @param string|null $languageId
     * @return ArrayCollection<Employee>
     */
    public function findByProvinceIdAndProfessionId($provinceId, $professionId, $languageId = null)
    {
        $result = $this->createQueryBuilder('e')
            ->select('e')
            ->join('e.person', 'p', 'WITH', 'p.user = e.person')
            ->andWhere('p.province = :provinceId')
            ->setParameter('provinceId', $provinceId)
            ->orderBy('e.person', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();

        return new ArrayCollection($result);
    }
}
