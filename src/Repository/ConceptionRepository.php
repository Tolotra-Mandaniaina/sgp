<?php

namespace App\Repository;

use App\Entity\Conception;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Conception>
 *
 * @method Conception|null find($id, $lockMode = null, $lockVersion = null)
 * @method Conception|null findOneBy(array $criteria, array $orderBy = null)
 * @method Conception[]    findAll()
 * @method Conception[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConceptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Conception::class);
    }

//    /**
//     * @return Conception[] Returns an array of Conception objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Conception
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
