<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FourthCommitController extends AbstractController
{
    /**
     * @Route("/fourth/commit", name="app_fourth_commit")
     */
    public function index(): Response
    {
        return $this->render('fourth_commit/index.html.twig', [
            'controller_name' => 'FourthCommitController',
        ]);
    }
}
