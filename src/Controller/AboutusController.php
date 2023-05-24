<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutusController extends AbstractController
{
    #[Route('/aboutus', name: 'app_aboutus')]
    public function index(): Response
    {
        return $this->render('aboutus/index.html.twig', [
            'controller_name' => 'AboutusController',
        ]);
    }
}
