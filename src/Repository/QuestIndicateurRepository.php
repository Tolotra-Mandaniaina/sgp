<?php

namespace App\Repository;

use App\Entity\QuestIndicateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<QuestIndicateur>
 *
 * @method QuestIndicateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method QuestIndicateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method QuestIndicateur[]    findAll()
 * @method QuestIndicateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuestIndicateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, QuestIndicateur::class);
    }

//    /**
//     * @return QuestIndicateur[] Returns an array of QuestIndicateur objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('q')
//            ->andWhere('q.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('q.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?QuestIndicateur
//    {
//        return $this->createQueryBuilder('q')
//            ->andWhere('q.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
