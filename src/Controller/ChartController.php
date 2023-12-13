<?php

namespace App\Controller;

use App\Entity\IdentificationProjet;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\IdentificationProjetRepository;

class ChartController extends AbstractController
{
    #[Route('/chart', name: 'app_chart')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $repository = $entityManager->getRepository(IdentificationProjet::class);

        // Requête pour A13
        $queryA13 = $repository->createQueryBuilder('ip')
            ->select('CASE 
                           WHEN ip.A13 = 1 THEN \'Nord\' 
                           WHEN ip.A13 = 2 THEN \'Est\' 
                           WHEN ip.A13 = 3 THEN \'Sud-Ouest\' 
                           WHEN ip.A13 = 4 THEN \'Centre\' 
                           WHEN ip.A13 = 5 THEN \'Potentiel\' 
                           ELSE \'Autre\' 
                       END as A13_region, COUNT(ip.A13) as occurrences')
            ->groupBy('A13_region')
            ->getQuery();

        $result = $queryA13->getResult();

        // Requête pour A10 et A16
        $queryStatut = $repository->createQueryBuilder('ip')
            ->select(' CASE 
                           WHEN ip.A16 = 1 THEN \'Project activities completed\' 
                           WHEN ip.A16 = 2 THEN \'Final reports pending\' 
                           WHEN ip.A16 = 3 THEN \'Project Terminated Before Completion\' 
                           WHEN ip.A16 = 4 THEN \'Satisfactorily Completed\' 
                           ELSE \'Autre\' 
                       END as statut_projet, COUNT(ip.A16) as nbrprojet')
             ->groupBy('statut_projet')
            ->getQuery();

        $statut = $queryStatut->getResult();



        $queryA12 = $repository->createQueryBuilder('ip')
        ->select('CASE 
                       WHEN ip.A12 = 1 THEN \'OP 1\' 
                       WHEN ip.A12 = 2 THEN \'OP 2\' 
                       WHEN ip.A12 = 3 THEN \'OP 3\' 
                       WHEN ip.A12 = 4 THEN \'OP 4\' 
                       WHEN ip.A12 = 5 THEN \'OP 5\' 
                       ELSE \'OP 6\' 
                   END as A12_phase, COUNT(ip.A12) as occurrences')
        ->groupBy('A12_phase')
        ->getQuery();

    $phase = $queryA12->getResult();


    $queryA11 = $repository->createQueryBuilder('ip')
    ->select('CASE 
                   WHEN ip.A11 = 1 THEN \'CORE\' 
                   WHEN ip.A11 = 2 THEN \'STAR\' 
                   ELSE \'ICCA - GSI\' 
               END as A11_fond, COUNT(ip.A11) as occurrences')
    ->groupBy('A11_fond')
    ->getQuery();

$fond = $queryA11->getResult();

        // Renvoyer la réponse HTML en utilisant la vue Twig
        return $this->render('chart/index.html.twig', [
            'result' => $result,
            'statut' => $statut,
            'phase' => $phase,
            'fond' => $fond,
        ]);
    }
}
