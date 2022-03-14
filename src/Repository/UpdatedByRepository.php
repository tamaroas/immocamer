<?php

namespace App\Repository;

use App\Entity\UpdatedBy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UpdatedBy|null find($id, $lockMode = null, $lockVersion = null)
 * @method UpdatedBy|null findOneBy(array $criteria, array $orderBy = null)
 * @method UpdatedBy[]    findAll()
 * @method UpdatedBy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UpdatedByRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UpdatedBy::class);
    }

    // /**
    //  * @return UpdatedBy[] Returns an array of UpdatedBy objects
    //  */
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
    public function findOneBySomeField($value): ?UpdatedBy
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
