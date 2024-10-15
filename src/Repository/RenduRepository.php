<?php

namespace App\Repository;

use App\Entity\Rendu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Rendu>
 */
class RenduRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rendu::class);
    }

    public function findActiveRendusOrderedByDate()
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.actif = :isActive')
            ->setParameter('isActive', true)
            ->orderBy('r.dateDepot', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findActiveRendusOrderedByDateIndex()
    {
        return $this->createQueryBuilder('r')
            ->orderBy('r.dateDepot', 'ASC')
            ->getQuery()
            ->getResult();
    }

    //    /**
    //     * @return Rendu[] Returns an array of Rendu objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Rendu
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
