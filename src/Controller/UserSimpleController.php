<?php

namespace App\Controller;

use App\Entity\UserSimple;
use App\Form\UserSimpleType;
use App\Repository\UserSimpleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user')]
class UserSimpleController extends AbstractController
{
    #[Route('/', name: 'app_user_simple_index', methods: ['GET'])]
    public function index(UserSimpleRepository $userSimpleRepository): Response
    {
        return $this->render('user_simple/index.html.twig', [
            'user_simples' => $userSimpleRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_user_simple_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $userSimple = new UserSimple();
        $form = $this->createForm(UserSimpleType::class, $userSimple);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($userSimple);
            $entityManager->flush();

            return $this->redirectToRoute('app_user_simple_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user_simple/new.html.twig', [
            'user_simple' => $userSimple,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_user_simple_show', methods: ['GET'])]
    public function show(UserSimple $userSimple): Response
    {
        return $this->render('user_simple/show.html.twig', [
            'user_simple' => $userSimple,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_simple_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, UserSimple $userSimple, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UserSimpleType::class, $userSimple);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_user_simple_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user_simple/edit.html.twig', [
            'user_simple' => $userSimple,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_user_simple_delete', methods: ['POST'])]
    public function delete(Request $request, UserSimple $userSimple, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$userSimple->getId(), $request->request->get('_token'))) {
            $entityManager->remove($userSimple);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_user_simple_index', [], Response::HTTP_SEE_OTHER);
    }
}
