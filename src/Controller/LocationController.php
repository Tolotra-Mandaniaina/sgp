<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\LocationType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response; // Assurez-vous que vous utilisez la classe Response correcte



class LocationController extends AbstractController
{
    #[Route('/location', name: 'app_location')]
    public function index(Request $request): Response
    { $form = $this->createForm(LocationType::class);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Traitez les données du formulaire
        }
    
        return $this->render('location/location.html.twig', [
            'form' => $form->createView(),
            
        ]);
    }
}
