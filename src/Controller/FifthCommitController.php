<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FifthCommitController extends AbstractController
{
    /**
     * @Route("/fifth/commit", name="app_fifth_commit")
     */
    public function index(): Response
    {
        return $this->render('fifth_commit/index.html.twig', [
            'controller_name' => 'FifthCommitController',
        ]);
    }
}
