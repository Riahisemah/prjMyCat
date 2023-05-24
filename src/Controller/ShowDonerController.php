<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShowDonerController extends AbstractController
{
    #[Route('/show/doner', name: 'app_show_doner')]
    public function index(): Response
    {
        return $this->render('show_doner/index.html.twig', [
        ]);
    }
}
