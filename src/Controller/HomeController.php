<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('', name: 'home')]
    public function index(ArticleRepository $articles): Response
    {
        /* dump($articles->findAll());die; */
        $articles=$articles->findAll();
        return $this->render('home/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}
