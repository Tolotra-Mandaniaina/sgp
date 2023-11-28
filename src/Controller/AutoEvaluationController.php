<?php

namespace App\Controller;

use App\Entity\AutoEvaluation;
use App\Form\AutoEvaluationType;
use App\Repository\AutoEvaluationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/auto/evaluation')]
class AutoEvaluationController extends AbstractController
{
    #[Route('/', name: 'app_auto_evaluation_index', methods: ['GET'])]
    public function index(AutoEvaluationRepository $autoEvaluationRepository): Response
    {
        return $this->render('auto_evaluation/index.html.twig', [
            'auto_evaluations' => $autoEvaluationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_auto_evaluation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $autoEvaluation = new AutoEvaluation();
        $form = $this->createForm(AutoEvaluationType::class, $autoEvaluation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($autoEvaluation);
            $entityManager->flush();

            return $this->redirectToRoute('app_auto_evaluation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('auto_evaluation/new.html.twig', [
            'auto_evaluation' => $autoEvaluation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_auto_evaluation_show', methods: ['GET'])]
    public function show(AutoEvaluation $autoEvaluation): Response
    {
        return $this->render('auto_evaluation/show.html.twig', [
            'auto_evaluation' => $autoEvaluation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_auto_evaluation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, AutoEvaluation $autoEvaluation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AutoEvaluationType::class, $autoEvaluation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_auto_evaluation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('auto_evaluation/edit.html.twig', [
            'auto_evaluation' => $autoEvaluation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_auto_evaluation_delete', methods: ['POST'])]
    public function delete(Request $request, AutoEvaluation $autoEvaluation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$autoEvaluation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($autoEvaluation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_auto_evaluation_index', [], Response::HTTP_SEE_OTHER);
    }
}
