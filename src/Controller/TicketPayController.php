<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TicketPayController extends AbstractController
{
    /**
     * @Route("/ticket/pay", name="ticket_pay")
     */
    public function index()
    {
        return $this->render('ticket_pay/index.html.twig', [
            'controller_name' => 'TicketPayController',
        ]);
    }
}
