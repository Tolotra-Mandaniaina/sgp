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

    public function countOccurrencesByDigit()
    {
        $entityManager = $this->getEntityManager();
        $connection = $entityManager->getConnection();

        $sql = '
            SELECT TRIM(SUBSTRING(SUBSTRING(ip.A19, 1, LOCATE(" ", ip.A19, n.digit) - 1), -1)) AS value, COUNT(*) AS Occurrences
            FROM identification_projet ip
            JOIN (
                SELECT 0 AS digit UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9
            ) n ON CHAR_LENGTH(ip.A19) - CHAR_LENGTH(REPLACE(ip.A19, " ", "")) >= n.digit
            WHERE TRIM(SUBSTRING(SUBSTRING(ip.A19, 1, LOCATE(" ", ip.A19, n.digit) - 1), -1)) <> ""
            GROUP BY value
        ';

        $statement = $connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();


        return $result;
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
