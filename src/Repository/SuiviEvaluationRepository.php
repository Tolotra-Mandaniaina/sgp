<?php

namespace App\Repository;

use App\Entity\SuiviEvaluation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SuiviEvaluation>
 *
 * @method SuiviEvaluation|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuiviEvaluation|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuiviEvaluation[]    findAll()
 * @method SuiviEvaluation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuiviEvaluationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuiviEvaluation::class);
    }

//    /**
//     * @return SuiviEvaluation[] Returns an array of SuiviEvaluation objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SuiviEvaluation
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
