<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImocamerController extends AbstractController
{
    /**
     * @Route("/imocamer", name="imocamer")
     */
    public function index(): Response
    {
        return $this->render('imocamer/index.html.twig', [
            'controller_name' => 'ImocamerController',
        ]);
    }
}
