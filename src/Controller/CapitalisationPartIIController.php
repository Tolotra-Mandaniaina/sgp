<?php

namespace App\Controller;

use App\Entity\CapitalisationPartII;
use App\Form\CapitalisationPartIIType;
use App\Repository\CapitalisationPartIIRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/capitalisation/part2')]
class CapitalisationPartIIController extends AbstractController
{
    #[Route('/', name: 'app_capitalisation_part_i_i_index', methods: ['GET'])]
    public function index(CapitalisationPartIIRepository $capitalisationPartIIRepository): Response
    {
        return $this->render('capitalisation_part_ii/index.html.twig', [
            'capitalisation_part_i_is' => $capitalisationPartIIRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_capitalisation_part_i_i_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $capitalisationPartII = new CapitalisationPartII();
        $form = $this->createForm(CapitalisationPartIIType::class, $capitalisationPartII);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($capitalisationPartII);
            $entityManager->flush();

            return $this->redirectToRoute('app_capitalisation_part_i_i_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('capitalisation_part_ii/new.html.twig', [
            'capitalisation_part_i_i' => $capitalisationPartII,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_capitalisation_part_i_i_show', methods: ['GET'])]
    public function show(CapitalisationPartII $capitalisationPartII): Response
    {
        return $this->render('capitalisation_part_ii/show.html.twig', [
            'capitalisation_part_i_i' => $capitalisationPartII,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_capitalisation_part_i_i_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CapitalisationPartII $capitalisationPartII, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CapitalisationPartIIType::class, $capitalisationPartII);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_capitalisation_part_i_i_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('capitalisation_part_ii/edit.html.twig', [
            'capitalisation_part_i_i' => $capitalisationPartII,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_capitalisation_part_i_i_delete', methods: ['POST'])]
    public function delete(Request $request, CapitalisationPartII $capitalisationPartII, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$capitalisationPartII->getId(), $request->request->get('_token'))) {
            $entityManager->remove($capitalisationPartII);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_capitalisation_part_i_i_index', [], Response::HTTP_SEE_OTHER);
    }
}
