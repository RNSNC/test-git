<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstCommitController extends AbstractController
{
    /**
     * @Route("/first/commit", name="app_first_commit")
     */
    public function index(): Response
    {
        return $this->render('first_commit/index.html.twig', [
            'controller_name' => 'FirstCommitController',
        ]);
    }
}
