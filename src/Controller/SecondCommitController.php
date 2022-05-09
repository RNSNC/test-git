<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecondCommitController extends AbstractController
{
    /**
     * @Route("/second/commit", name="app_second_commit")
     */
    public function index(): Response
    {
        return $this->render('second_commit/index.html.twig', [
            'controller_name' => 'SecondCommitController',
        ]);
    }
}
