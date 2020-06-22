<?php

namespace App\Controller;

use App\Repository\ExpositionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PlanningController extends AbstractController
{
    /**
     * @Route("/planning", name="planning")
     */
    public function index(ExpositionRepository $expositionRepository)
    {
        $expositions = $expositionRepository->findAll();

        return $this->render('planning/index.html.twig', [
            'expositions' => $expositions,
        ]);
    }
}
