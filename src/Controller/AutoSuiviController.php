<?php

namespace App\Controller;

use App\Entity\AutoSuivi;
use App\Form\AutoSuiviType;
use App\Repository\AutoSuiviRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/auto/suivi')]
class AutoSuiviController extends AbstractController
{
    #[Route('/', name: 'app_auto_suivi_index', methods: ['GET'])]
    public function index(AutoSuiviRepository $autoSuiviRepository): Response
    {
        return $this->render('auto_suivi/index.html.twig', [
            'auto_suivis' => $autoSuiviRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_auto_suivi_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $autoSuivi = new AutoSuivi();
        $form = $this->createForm(AutoSuiviType::class, $autoSuivi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($autoSuivi);
            $entityManager->flush();

            return $this->redirectToRoute('app_auto_suivi_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('auto_suivi/new.html.twig', [
            'auto_suivi' => $autoSuivi,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_auto_suivi_show', methods: ['GET'])]
    public function show(AutoSuivi $autoSuivi): Response
    {
        return $this->render('auto_suivi/show.html.twig', [
            'auto_suivi' => $autoSuivi,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_auto_suivi_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, AutoSuivi $autoSuivi, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AutoSuiviType::class, $autoSuivi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_auto_suivi_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('auto_suivi/edit.html.twig', [
            'auto_suivi' => $autoSuivi,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_auto_suivi_delete', methods: ['POST'])]
    public function delete(Request $request, AutoSuivi $autoSuivi, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$autoSuivi->getId(), $request->request->get('_token'))) {
            $entityManager->remove($autoSuivi);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_auto_suivi_index', [], Response::HTTP_SEE_OTHER);
    }
}
