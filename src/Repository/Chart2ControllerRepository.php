<?php

namespace App\Repository;

use App\Entity\Chart2Controller;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Chart2Controller>
 *
 * @method Chart2Controller|null find($id, $lockMode = null, $lockVersion = null)
 * @method Chart2Controller|null findOneBy(array $criteria, array $orderBy = null)
 * @method Chart2Controller[]    findAll()
 * @method Chart2Controller[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Chart2ControllerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Chart2Controller::class);
    }

//    /**
//     * @return Chart2Controller[] Returns an array of Chart2Controller objects
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

//    public function findOneBySomeField($value): ?Chart2Controller
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
