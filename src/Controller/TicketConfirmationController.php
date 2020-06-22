<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TicketConfirmationController extends AbstractController
{
    /**
     * @Route("/ticket/confirmation", name="ticket_confirmation")
     */
    public function index()
    {
        return $this->render('ticket_confirmation/index.html.twig', [
            'controller_name' => 'TicketConfirmationController',
        ]);
    }
}
