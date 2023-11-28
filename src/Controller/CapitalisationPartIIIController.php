<?php

namespace App\Controller;

use App\Entity\CapitalisationPartIII;
use App\Form\CapitalisationPartIIIType;
use App\Repository\CapitalisationPartIIIRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/capitalisation/part3')]
class CapitalisationPartIIIController extends AbstractController
{
    #[Route('/', name: 'app_capitalisation_part_i_i_i_index', methods: ['GET'])]
    public function index(CapitalisationPartIIIRepository $capitalisationPartIIIRepository): Response
    {
        return $this->render('capitalisation_part_iii/index.html.twig', [
            'capitalisation_part_i_i_is' => $capitalisationPartIIIRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_capitalisation_part_i_i_i_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $capitalisationPartIII = new CapitalisationPartIII();
        $form = $this->createForm(CapitalisationPartIIIType::class, $capitalisationPartIII);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($capitalisationPartIII);
            $entityManager->flush();

            return $this->redirectToRoute('app_capitalisation_part_i_i_i_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('capitalisation_part_iii/new.html.twig', [
            'capitalisation_part_i_i_i' => $capitalisationPartIII,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_capitalisation_part_i_i_i_show', methods: ['GET'])]
    public function show(CapitalisationPartIII $capitalisationPartIII): Response
    {
        return $this->render('capitalisation_part_iii/show.html.twig', [
            'capitalisation_part_i_i_i' => $capitalisationPartIII,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_capitalisation_part_i_i_i_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CapitalisationPartIII $capitalisationPartIII, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CapitalisationPartIIIType::class, $capitalisationPartIII);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_capitalisation_part_i_i_i_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('capitalisation_part_iii/edit.html.twig', [
            'capitalisation_part_i_i_i' => $capitalisationPartIII,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_capitalisation_part_i_i_i_delete', methods: ['POST'])]
    public function delete(Request $request, CapitalisationPartIII $capitalisationPartIII, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$capitalisationPartIII->getId(), $request->request->get('_token'))) {
            $entityManager->remove($capitalisationPartIII);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_capitalisation_part_i_i_i_index', [], Response::HTTP_SEE_OTHER);
    }
}
