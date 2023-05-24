<?php

namespace App\Controller;

use App\Repository\CatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StoreController extends AbstractController
{
    #[Route('/store', name: 'app_store')]
    public function index(CatRepository $catRepository): Response
    {
        return $this->render('store/index.html.twig', [
            'cats' => $catRepository->findAll(),

        ]);
    }
}
