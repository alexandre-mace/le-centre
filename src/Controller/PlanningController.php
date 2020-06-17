<?php

namespace App\Controller;

use App\Repository\ExpoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PlanningController extends AbstractController
{
    /**
     * @Route("/planning", name="planning")
     */
    public function index(ExpoRepository $expoRepository)
    {
        $expos = $expoRepository->findAll();

        return $this->render('planning/index.html.twig', [
            'expos' => $expos,
        ]);
    }
}
