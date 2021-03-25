<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AbdouController extends AbstractController
{
    /**
     * @Route("/abdou", name="abdou")
     */
    public function index(): Response
    {
        return $this->render('abdou/index.html.twig', [
            'controller_name' => 'AbdouController',
        ]);
    }
}
