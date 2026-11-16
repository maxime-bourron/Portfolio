<?php

namespace App\Controller;

use App\Entity\Projet;
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

    #[Route('/projets/{id}', name: 'app_projet_detail', requirements: ['id' => '\d+'])]
    public function detail(Projet $projet): Response
    {
        return $this->render('projets/detail.html.twig', [
            'projet' => $projet,
        ]);
    }
}
