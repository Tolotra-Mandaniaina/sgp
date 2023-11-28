<?php

namespace App\Controller;

use App\Entity\IdentificationProjet;
use App\Form\IdentificationProjetType;
use App\Repository\IdentificationProjetRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/identification/projet')]
class IdentificationProjetController extends AbstractController
{
    #[Route('/', name: 'app_identification_projet_index', methods: ['GET'])]
    public function index(IdentificationProjetRepository $identificationProjetRepository): Response
    {
        return $this->render('identification_projet/index.html.twig', [
            'identification_projets' => $identificationProjetRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_identification_projet_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $identificationProjet = new IdentificationProjet();
        $form = $this->createForm(IdentificationProjetType::class, $identificationProjet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($identificationProjet);
            $entityManager->flush();

            return $this->redirectToRoute('app_identification_projet_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('identification_projet/new.html.twig', [
            'identification_projet' => $identificationProjet,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_identification_projet_show', methods: ['GET'])]
    public function show(IdentificationProjet $identificationProjet): Response
    {
        return $this->render('identification_projet/show.html.twig', [
            'identification_projet' => $identificationProjet,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_identification_projet_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, IdentificationProjet $identificationProjet, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(IdentificationProjetType::class, $identificationProjet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_identification_projet_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('identification_projet/edit.html.twig', [
            'identification_projet' => $identificationProjet,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_identification_projet_delete', methods: ['POST'])]
    public function delete(Request $request, IdentificationProjet $identificationProjet, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$identificationProjet->getId(), $request->request->get('_token'))) {
            $entityManager->remove($identificationProjet);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_identification_projet_index', [], Response::HTTP_SEE_OTHER);
    }
}
