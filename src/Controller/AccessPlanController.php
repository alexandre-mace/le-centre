<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccessPlanController extends AbstractController
{
    /**
     * @Route("/access/plan", name="access_plan")
     */
    public function index()
    {
        return $this->render('access_plan/index.html.twig', [
            'controller_name' => 'AccessPlanController',
        ]);
    }
}
