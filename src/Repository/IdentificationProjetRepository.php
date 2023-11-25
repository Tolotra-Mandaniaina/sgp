<?php

namespace App\Repository;

use App\Entity\IdentificationProjet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<IdentificationProjet>
 *
 * @method IdentificationProjet|null find($id, $lockMode = null, $lockVersion = null)
 * @method IdentificationProjet|null findOneBy(array $criteria, array $orderBy = null)
 * @method IdentificationProjet[]    findAll()
 * @method IdentificationProjet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IdentificationProjetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IdentificationProjet::class);
    }

//    /**
//     * @return IdentificationProjet[] Returns an array of IdentificationProjet objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?IdentificationProjet
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
