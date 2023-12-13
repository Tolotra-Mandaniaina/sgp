<?php

namespace App\Controller;

use App\Entity\IdentificationProjet;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\IdentificationProjetRepository;

class Chart2Controller extends AbstractController
{
    #[Route('/chart2', name: 'app_chart_2')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $repository = $entityManager->getRepository(IdentificationProjet::class);

        // Requête pour A13
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
        return $this->render('chart2/index.html.twig', [
            'fond' => $fond,
           
           
        ]);
    }
}
