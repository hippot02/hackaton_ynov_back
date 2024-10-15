<?php

namespace App\Controller;

use App\Repository\RenduRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApiController extends AbstractController
{
    #[Route('/api', name: 'app_api')]
    public function index(RenduRepository $renduRepository): JsonResponse
    {
        $activeRendus = $renduRepository->findActiveRendusOrderedByDate();

        $data = [];
        foreach ($activeRendus as $rendu) {
            $data[] = [
                'titre' => $rendu->getTitre(),
                'datedepot' => $rendu->getDateDepot()->format(\DateTime::ATOM),
                'liendepot' => $rendu->getLiendepot(),
                'groupe' => $rendu->getGroupe(),
            ];
        }
        return $this->json($data);
    }
}
