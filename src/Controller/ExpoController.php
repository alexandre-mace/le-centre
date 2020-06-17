<?php

namespace App\Controller;

use App\Entity\Expo;
use App\Form\ExpoType;
use App\Repository\ExpoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/expo")
 */
class ExpoController extends AbstractController
{
    /**
     * @Route("/", name="expo_index", methods={"GET"})
     */
    public function index(ExpoRepository $expoRepository): Response
    {
        return $this->render('expo/index.html.twig', [
            'expos' => $expoRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="expo_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $expo = new Expo();
        $form = $this->createForm(ExpoType::class, $expo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($expo);
            $entityManager->flush();

            return $this->redirectToRoute('expo_index');
        }

        return $this->render('expo/new.html.twig', [
            'expo' => $expo,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="expo_show", methods={"GET"})
     */
    public function show(Expo $expo): Response
    {
        return $this->render('expo/show.html.twig', [
            'expo' => $expo,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="expo_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Expo $expo): Response
    {
        $form = $this->createForm(ExpoType::class, $expo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('expo_index');
        }

        return $this->render('expo/edit.html.twig', [
            'expo' => $expo,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="expo_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Expo $expo): Response
    {
        if ($this->isCsrfTokenValid('delete'.$expo->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($expo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('expo_index');
    }
}
