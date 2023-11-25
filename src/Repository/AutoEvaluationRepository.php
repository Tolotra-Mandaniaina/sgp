<?php

namespace App\Repository;

use App\Entity\AutoEvaluation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AutoEvaluation>
 *
 * @method AutoEvaluation|null find($id, $lockMode = null, $lockVersion = null)
 * @method AutoEvaluation|null findOneBy(array $criteria, array $orderBy = null)
 * @method AutoEvaluation[]    findAll()
 * @method AutoEvaluation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AutoEvaluationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AutoEvaluation::class);
    }

//    /**
//     * @return AutoEvaluation[] Returns an array of AutoEvaluation objects
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

//    public function findOneBySomeField($value): ?AutoEvaluation
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
