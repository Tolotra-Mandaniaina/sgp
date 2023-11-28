<?php

namespace App\Controller;

use App\Entity\CapitalisationPartI;
use App\Form\CapitalisationPartIType;
use App\Repository\CapitalisationPartIRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/capitalisation/part1')]
class CapitalisationPartIController extends AbstractController
{
    #[Route('/', name: 'app_capitalisation_part_i_index', methods: ['GET'])]
    public function index(CapitalisationPartIRepository $capitalisationPartIRepository): Response
    {
        return $this->render('capitalisation_part_i/index.html.twig', [
            'capitalisation_part_is' => $capitalisationPartIRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_capitalisation_part_i_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $capitalisationPartI = new CapitalisationPartI();
        $form = $this->createForm(CapitalisationPartIType::class, $capitalisationPartI);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($capitalisationPartI);
            $entityManager->flush();

            return $this->redirectToRoute('app_capitalisation_part_i_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('capitalisation_part_i/new.html.twig', [
            'capitalisation_part_i' => $capitalisationPartI,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_capitalisation_part_i_show', methods: ['GET'])]
    public function show(CapitalisationPartI $capitalisationPartI): Response
    {
        return $this->render('capitalisation_part_i/show.html.twig', [
            'capitalisation_part_i' => $capitalisationPartI,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_capitalisation_part_i_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CapitalisationPartI $capitalisationPartI, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CapitalisationPartIType::class, $capitalisationPartI);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_capitalisation_part_i_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('capitalisation_part_i/edit.html.twig', [
            'capitalisation_part_i' => $capitalisationPartI,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_capitalisation_part_i_delete', methods: ['POST'])]
    public function delete(Request $request, CapitalisationPartI $capitalisationPartI, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$capitalisationPartI->getId(), $request->request->get('_token'))) {
            $entityManager->remove($capitalisationPartI);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_capitalisation_part_i_index', [], Response::HTTP_SEE_OTHER);
    }
}
