<?php

namespace App\Controller;

use App\Repository\RenduRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;

class ApiController extends AbstractController
{
    #[Route('/api', name: 'app_api')]
    public function index(RenduRepository $renduRepository, EntityManagerInterface $entityManager): JsonResponse
    {

        $activeRendus = $renduRepository->findActiveRendusOrderedByDate();

        $data = [];

        foreach ($activeRendus as $rendu) {
            $now = new \DateTime();
            if ($rendu->getDateDepot() < $now) {
                $rendu->setActif(false);
                $entityManager->persist($rendu);
            } else {
                $data[] = [
                    'title' => $rendu->getTitre(),
                    'endDate' => $rendu->getDateDepot()->format(\DateTime::ATOM),
                    'repoLink' => $rendu->getLienDepot(),
                    'group' => $rendu->getGroupe(),
                ];
            }
        }
        $entityManager->flush();
        return $this->json($data);
    }
}
