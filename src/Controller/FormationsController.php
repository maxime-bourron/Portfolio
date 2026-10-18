<?php

namespace App\Controller;

use App\Repository\FormationRepository;
use App\Entity\Formation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FormationsController extends AbstractController
{
    #[Route('/formations', name: 'app_formations')]
    public function index(FormationRepository $formationRepository): Response
    {
        $formations = $formationRepository->findBy([], ['dateDebut' => 'DESC']);

        return $this->render('formations/index.html.twig', [
            'formations' => $formations,
        ]);
    }

    #[Route('/formations/{id}', name: 'app_formation_detail')]
    public function detail(Formation $formation): Response
    {
        return $this->render('formations/detail.html.twig', [
            'formation' => $formation,
        ]);
    }
}
