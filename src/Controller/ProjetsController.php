<?php

namespace App\Controller;

use App\Repository\ProjetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProjetsController extends AbstractController
{
    #[Route('/projets', name: 'app_projets')]
    public function index(ProjetRepository $projetRepository): Response
    {
        return $this->render('projets/index.html.twig', [
            'principal' => $projetRepository->findOneBy(['misEnAvant' => true]),
            'projets' => $projetRepository->findBy(['misEnAvant' => false], ['dateDebut' => 'DESC']),
        ]);
    }
}
