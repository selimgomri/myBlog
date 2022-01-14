<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectImageActionController extends AbstractController
{
    #[Route('/project/image/action', name: 'project_image_action')]
    public function index(): Response
    {
        return $this->render('project_image_action/index.html.twig', [
            'controller_name' => 'ProjectImageActionController',
        ]);
    }
}
