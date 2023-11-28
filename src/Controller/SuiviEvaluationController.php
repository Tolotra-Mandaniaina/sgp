<?php

namespace App\Controller;

use App\Entity\SuiviEvaluation;
use App\Form\SuiviEvaluationType;
use App\Repository\SuiviEvaluationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/suivi/evaluation')]
class SuiviEvaluationController extends AbstractController
{
    #[Route('/', name: 'app_suivi_evaluation_index', methods: ['GET'])]
    public function index(SuiviEvaluationRepository $suiviEvaluationRepository): Response
    {
        return $this->render('suivi_evaluation/index.html.twig', [
            'suivi_evaluations' => $suiviEvaluationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_suivi_evaluation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $suiviEvaluation = new SuiviEvaluation();
        $form = $this->createForm(SuiviEvaluationType::class, $suiviEvaluation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($suiviEvaluation);
            $entityManager->flush();

            return $this->redirectToRoute('app_suivi_evaluation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('suivi_evaluation/new.html.twig', [
            'suivi_evaluation' => $suiviEvaluation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_suivi_evaluation_show', methods: ['GET'])]
    public function show(SuiviEvaluation $suiviEvaluation): Response
    {
        return $this->render('suivi_evaluation/show.html.twig', [
            'suivi_evaluation' => $suiviEvaluation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_suivi_evaluation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, SuiviEvaluation $suiviEvaluation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SuiviEvaluationType::class, $suiviEvaluation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_suivi_evaluation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('suivi_evaluation/edit.html.twig', [
            'suivi_evaluation' => $suiviEvaluation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_suivi_evaluation_delete', methods: ['POST'])]
    public function delete(Request $request, SuiviEvaluation $suiviEvaluation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$suiviEvaluation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($suiviEvaluation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_suivi_evaluation_index', [], Response::HTTP_SEE_OTHER);
    }
}
