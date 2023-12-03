<?php

namespace App\Repository;

use App\Entity\AllIndicateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AllIndicateur>
 *
 * @method AllIndicateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method AllIndicateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method AllIndicateur[]    findAll()
 * @method AllIndicateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AllIndicateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AllIndicateur::class);
    }

//    /**
//     * @return AllIndicateur[] Returns an array of AllIndicateur objects
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

//    public function findOneBySomeField($value): ?AllIndicateur
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
