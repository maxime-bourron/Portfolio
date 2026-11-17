<?php

namespace App\Controller;

use App\Repository\ExperienceRepository;
use App\Repository\FormationRepository;
use App\Repository\ProjetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SitemapController extends AbstractController
{
    #[Route('/sitemap.xml', name: 'app_sitemap')]
    public function sitemap(FormationRepository $formationRepository, ExperienceRepository $experienceRepository, ProjetRepository $projetRepository): Response
    {
        $response = $this->render('sitemap/sitemap.xml.twig', [
            'formations' => $formationRepository->findAll(),
            'experiences' => $experienceRepository->findAll(),
            'projets' => $projetRepository->findAll(),
        ]);
        $response->headers->set('Content-Type', 'application/xml');

        return $response;
    }

    #[Route('/robots.txt', name: 'app_robots')]
    public function robots(): Response
    {
        $response = $this->render('sitemap/robots.txt.twig');
        $response->headers->set('Content-Type', 'text/plain');

        return $response;
    }
}
