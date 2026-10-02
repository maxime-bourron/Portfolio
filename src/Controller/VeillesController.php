<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class VeillesController extends AbstractController
{
    #[Route('/veilles', name: 'app_veilles')]
    public function index(): Response
    {
        return $this->render('veilles/index.html.twig', [
            'controller_name' => 'VeillesController',
        ]);
    }
}
