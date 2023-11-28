<?php

namespace App\Controller;

use App\Entity\IdentificationProjet;
use App\Entity\SuiviEvaluation;
use App\Entity\AutoSuivi;
use App\Entity\AutoEvaluation;
use App\Entity\Conception;
use App\Entity\CapitalisationPartI;
use App\Entity\CapitalisationPartII;
use App\Entity\CapitalisationPartIII;




use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;


class TableauBordController extends AbstractController
{
    #[Route('/tableau_bord', name: 'app_tableau_bord')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $Idenfitication = $entityManager->getRepository(IdentificationProjet::class)->count([]);
        $SuiviEvaluation = $entityManager->getRepository(SuiviEvaluation::class)->count([]);
        $AutoSuivi = $entityManager->getRepository(AutoSuivi::class)->count([]);
        $AutoEvaluation = $entityManager->getRepository(AutoEvaluation::class)->count([]);
        $Conception = $entityManager->getRepository(Conception::class)->count([]);
        $Capitalisation1 = $entityManager->getRepository(CapitalisationPartI::class)->count([]);
        $Capitalisation2 = $entityManager->getRepository(CapitalisationPartII::class)->count([]);
        $Capitalisation3 = $entityManager->getRepository(CapitalisationPartIII::class)->count([]);


        return $this->render('tableau_bord/index.html.twig', [
            'controller_name' => 'TableauBordController',
            'Identification' => $Idenfitication,
            'SuiviEvaluation' => $SuiviEvaluation,
            'AutoSuivi' => $AutoSuivi,
            'AutoEvaluation' => $AutoEvaluation,
            'Conception' => $Conception,
            'Capitalisation1' => $Capitalisation1,
            'Capitalisation2' => $Capitalisation2,
            'Capitalisation3' => $Capitalisation3,
        ]);
    }
}
