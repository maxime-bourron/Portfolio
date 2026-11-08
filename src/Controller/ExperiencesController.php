<?php

namespace App\Controller;

use App\Entity\Experience;
use App\Repository\ExperienceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ExperiencesController extends AbstractController
{
    #[Route('/experiences', name: 'app_experiences')]
    public function index(ExperienceRepository $experienceRepository): Response
    {
        return $this->render('experiences/index.html.twig', [
            'stages' => $experienceRepository->findBy(['stageBts' => true], ['dateDebut' => 'DESC']),
            'autres' => $experienceRepository->findBy(['stageBts' => false], ['dateDebut' => 'DESC']),
        ]);
    }

    #[Route('/experiences/{id}', name: 'app_experience_detail', requirements: ['id' => '\d+'])]
    public function detail(Experience $experience): Response
    {
        return $this->render('experiences/detail.html.twig', [
            'experience' => $experience,
        ]);
    }
}
