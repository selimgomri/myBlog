<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShowDatabaseController extends AbstractController
{
    #[Route('/database', name: 'show_database')]
    public function index(ArticleRepository $articleRepository): Response
    {
        dump($articleRepository->findAll());die;

        return $this->render('templates/show_database/index.html.twig', ['db' => 'db']);
    }
}
