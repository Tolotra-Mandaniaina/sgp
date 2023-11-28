<?php

namespace App\Repository;

use App\Entity\CapitalisationPartII;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CapitalisationPartII>
 *
 * @method CapitalisationPartII|null find($id, $lockMode = null, $lockVersion = null)
 * @method CapitalisationPartII|null findOneBy(array $criteria, array $orderBy = null)
 * @method CapitalisationPartII[]    findAll()
 * @method CapitalisationPartII[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CapitalisationPartIIRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CapitalisationPartII::class);
    }

//    /**
//     * @return CapitalisationPartII[] Returns an array of CapitalisationPartII objects
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

//    public function findOneBySomeField($value): ?CapitalisationPartII
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
