<?php

namespace App\Repository;

use App\Entity\UserSimple;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UserSimple>
 *
 * @method UserSimple|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserSimple|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserSimple[]    findAll()
 * @method UserSimple[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserSimpleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserSimple::class);
    }

//    /**
//     * @return UserSimple[] Returns an array of UserSimple objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?UserSimple
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
