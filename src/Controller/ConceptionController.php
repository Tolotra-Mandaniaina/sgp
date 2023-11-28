<?php

namespace App\Controller;

use App\Entity\Conception;
use App\Form\ConceptionType;
use App\Repository\ConceptionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/conception')]
class ConceptionController extends AbstractController
{
    #[Route('/', name: 'app_conception_index', methods: ['GET'])]
    public function index(ConceptionRepository $conceptionRepository): Response
    {
        return $this->render('conception/index.html.twig', [
            'conceptions' => $conceptionRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_conception_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $conception = new Conception();
        $form = $this->createForm(ConceptionType::class, $conception);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($conception);
            $entityManager->flush();

            return $this->redirectToRoute('app_conception_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('conception/new.html.twig', [
            'conception' => $conception,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_conception_show', methods: ['GET'])]
    public function show(Conception $conception): Response
    {
        return $this->render('conception/show.html.twig', [
            'conception' => $conception,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_conception_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Conception $conception, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ConceptionType::class, $conception);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_conception_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('conception/edit.html.twig', [
            'conception' => $conception,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_conception_delete', methods: ['POST'])]
    public function delete(Request $request, Conception $conception, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$conception->getId(), $request->request->get('_token'))) {
            $entityManager->remove($conception);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_conception_index', [], Response::HTTP_SEE_OTHER);
    }
}
