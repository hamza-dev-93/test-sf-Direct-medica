<?php

namespace App\Repository;

use App\Entity\Affilie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Affilie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Affilie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Affilie[]    findAll()
 * @method Affilie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AffilieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Affilie::class);
    }

    // /**
    //  * @return Affilie[] Returns an array of Affilie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Affilie
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
