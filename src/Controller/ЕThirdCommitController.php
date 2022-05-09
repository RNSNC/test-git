<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ЕThirdCommitController extends AbstractController
{
    /**
     * @Route("//third/commit", name="app__third_commit")
     */
    public function index(): Response
    {
        return $this->render('Еthird_commit/index.html.twig', [
            'controller_name' => 'ЕThirdCommitController',
        ]);
    }
}
