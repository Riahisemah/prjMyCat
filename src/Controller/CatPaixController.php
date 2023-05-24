<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatPaixController extends AbstractController
{
    #[Route('/catpaix', name: 'app_cat_paix')]
    public function index(): Response
    {
        return $this->render('cat_paix/index.html.twig', [
            'controller_name' => 'CatPaixController',
        ]);
    }
}
