<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('', name: 'home')]
    #[Route("page/", name: "page/")]
    public function index(ArticleRepository $articleRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $query=$articleRepository->getAllQuery();
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1), /*page number*/
        10 /*limit per page*/
        );
        
        return $this->render('home/index.html.twig', ['pagination' => $pagination]);
    }
}
