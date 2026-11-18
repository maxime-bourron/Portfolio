<?php

namespace App\Controller;

use App\Repository\ProfilRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MentionsLegalesController extends AbstractController
{
    #[Route('/mentions-legales', name: 'app_mentions_legales')]
    public function index(ProfilRepository $profilRepository): Response
    {
        return $this->render('mentions_legales/index.html.twig', [
            'profil' => $profilRepository->find(1),
        ]);
    }
}
