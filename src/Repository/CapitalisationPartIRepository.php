<?php

namespace App\Repository;

use App\Entity\CapitalisationPartI;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CapitalisationPartI>
 *
 * @method CapitalisationPartI|null find($id, $lockMode = null, $lockVersion = null)
 * @method CapitalisationPartI|null findOneBy(array $criteria, array $orderBy = null)
 * @method CapitalisationPartI[]    findAll()
 * @method CapitalisationPartI[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CapitalisationPartIRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CapitalisationPartI::class);
    }

//    /**
//     * @return CapitalisationPartI[] Returns an array of CapitalisationPartI objects
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

//    public function findOneBySomeField($value): ?CapitalisationPartI
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
