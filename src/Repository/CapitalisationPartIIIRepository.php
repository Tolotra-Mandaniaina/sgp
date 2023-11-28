<?php

namespace App\Repository;

use App\Entity\CapitalisationPartIII;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CapitalisationPartIII>
 *
 * @method CapitalisationPartIII|null find($id, $lockMode = null, $lockVersion = null)
 * @method CapitalisationPartIII|null findOneBy(array $criteria, array $orderBy = null)
 * @method CapitalisationPartIII[]    findAll()
 * @method CapitalisationPartIII[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CapitalisationPartIIIRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CapitalisationPartIII::class);
    }

//    /**
//     * @return CapitalisationPartIII[] Returns an array of CapitalisationPartIII objects
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

//    public function findOneBySomeField($value): ?CapitalisationPartIII
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
