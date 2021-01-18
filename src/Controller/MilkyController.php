<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MilkyController extends AbstractController
{
    /**
     * @Route("/", name="milky")
     */
    public function index(): Response
    {
        return $this->render('milky/index.html.twig', [
            'controller_name' => 'MilkyController',
        ]);
    }
}
