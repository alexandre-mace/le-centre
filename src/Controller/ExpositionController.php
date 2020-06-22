<?php

namespace App\Controller;

use App\Entity\Exposition;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ExpositionController extends AbstractController
{
    /**
     * @Route("/exposition/{id}", name="exposition")
     */
    public function index(Exposition $exposition)
    {
        return $this->render('exposition/index.html.twig', [
            'exposition' => $exposition,
        ]);
    }
}
