<?php

namespace App\Controller;

use App\Repository\ProfilRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(ProfilRepository $profilRepository): Response
    {
        $profil = $profilRepository->find(1);

        return $this->render('accueil/index.html.twig', [
            'profil' => $profil,
        ]);
    }
}
