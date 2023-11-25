<?php

namespace App\Repository;

use App\Entity\AutoSuivi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AutoSuivi>
 *
 * @method AutoSuivi|null find($id, $lockMode = null, $lockVersion = null)
 * @method AutoSuivi|null findOneBy(array $criteria, array $orderBy = null)
 * @method AutoSuivi[]    findAll()
 * @method AutoSuivi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AutoSuiviRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AutoSuivi::class);
    }

//    /**
//     * @return AutoSuivi[] Returns an array of AutoSuivi objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AutoSuivi
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
