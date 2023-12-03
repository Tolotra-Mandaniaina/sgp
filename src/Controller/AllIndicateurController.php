<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use App\Repository\AllIndicateurRepository;
use App\Repository\ThematiqueRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AllIndicateurController extends AbstractController
{
    
    #[Route('/allindicateur/{idthem}', name: 'all_indicateur')]
    public function index(AllIndicateurRepository $AllIndicateurRepository, $idthem, ThematiqueRepository $ThematiqueRepository): Response
    {

         // Récupérer tous les indicateurs avec thematique_id égal à 1
        $indicateurs = $AllIndicateurRepository->findBy(['thematique' => $idthem]);
        $thematique = $ThematiqueRepository->findBy(['id' => $idthem]);
        $allthematique = $ThematiqueRepository->findAll();


        return $this->render('all_indicateur/index.html.twig', [
            'indicateurs' => $indicateurs,
            'idthem' => $idthem,
            'thematique' => $thematique,
            'allthematique' =>  $allthematique,

        ]);
    }
}
