<?php

namespace App\Entity;

use App\Repository\RenduRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RenduRepository::class)]
class Rendu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateDepot = null;

    #[ORM\Column(length: 255)]
    private ?string $lienDepot = null;

    #[ORM\Column(length: 255)]
    private ?string $groupe = null;

    #[ORM\Column(nullable: true)]
    private ?bool $actif = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDateDepot(): ?\DateTimeInterface
    {
        return $this->dateDepot;
    }

    public function setDateDepot(\DateTimeInterface $dateDepot): static
    {
        $this->dateDepot = $dateDepot;

        return $this;
    }

    public function getLienDepot(): ?string
    {
        return $this->lienDepot;
    }

    public function setLienDepot(string $lienDepot): static
    {
        $this->lienDepot = $lienDepot;

        return $this;
    }

    public function getGroupe(): ?string
    {
        return $this->groupe;
    }

    public function setGroupe(string $groupe): static
    {
        $this->groupe = $groupe;

        return $this;
    }

    public function isActif(): ?bool
    {
        return $this->actif;
    }

    public function setActif(?bool $actif): static
    {
        $this->actif = $actif;

        return $this;
    }
}
