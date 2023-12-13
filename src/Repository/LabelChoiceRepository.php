<?php

namespace App\Repository;

use App\Entity\LabelChoice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LabelChoice>
 *
 * @method LabelChoice|null find($id, $lockMode = null, $lockVersion = null)
 * @method LabelChoice|null findOneBy(array $criteria, array $orderBy = null)
 * @method LabelChoice[]    findAll()
 * @method LabelChoice[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LabelChoiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LabelChoice::class);
    }

//    /**
//     * @return LabelChoice[] Returns an array of LabelChoice objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?LabelChoice
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
