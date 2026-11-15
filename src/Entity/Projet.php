<?php

namespace App\Entity;

use App\Enum\TypeProjet;
use App\Repository\ProjetRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjetRepository::class)]
class Projet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $titre = null;

    #[ORM\Column(enumType: TypeProjet::class)]
    private ?TypeProjet $typeProjet = null;

    #[ORM\Column(length: 150)]
    private ?string $cadre = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $dateFin = null;

    #[ORM\Column(length: 300)]
    private ?string $resume = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $contexte = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $realisations = null;

    #[ORM\Column(length: 255)]
    private ?string $technos = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $softSkills = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $resultats = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $bilan = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $urlCode = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $urlDemo = null;

    #[ORM\Column(options: ['default' => false])]
    private ?bool $misEnAvant = false;

    #[ORM\Column(options: ['default' => false])]
    private ?bool $surAccueil = false;

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

    public function getTypeProjet(): ?TypeProjet
    {
        return $this->typeProjet;
    }

    public function setTypeProjet(TypeProjet $typeProjet): static
    {
        $this->typeProjet = $typeProjet;

        return $this;
    }

    public function getCadre(): ?string
    {
        return $this->cadre;
    }

    public function setCadre(string $cadre): static
    {
        $this->cadre = $cadre;

        return $this;
    }

    public function getDateDebut(): ?\DateTime
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTime $dateDebut): static
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTime
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTime $dateFin): static
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(string $resume): static
    {
        $this->resume = $resume;

        return $this;
    }

    public function getContexte(): ?string
    {
        return $this->contexte;
    }

    public function setContexte(string $contexte): static
    {
        $this->contexte = $contexte;

        return $this;
    }

    public function getRealisations(): ?string
    {
        return $this->realisations;
    }

    public function setRealisations(string $realisations): static
    {
        $this->realisations = $realisations;

        return $this;
    }

    public function getTechnos(): ?string
    {
        return $this->technos;
    }

    public function setTechnos(string $technos): static
    {
        $this->technos = $technos;

        return $this;
    }

    public function getSoftSkills(): ?string
    {
        return $this->softSkills;
    }

    public function setSoftSkills(?string $softSkills): static
    {
        $this->softSkills = $softSkills;

        return $this;
    }

    public function getResultats(): ?string
    {
        return $this->resultats;
    }

    public function setResultats(?string $resultats): static
    {
        $this->resultats = $resultats;

        return $this;
    }

    public function getBilan(): ?string
    {
        return $this->bilan;
    }

    public function setBilan(?string $bilan): static
    {
        $this->bilan = $bilan;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getUrlCode(): ?string
    {
        return $this->urlCode;
    }

    public function setUrlCode(?string $urlCode): static
    {
        $this->urlCode = $urlCode;

        return $this;
    }

    public function getUrlDemo(): ?string
    {
        return $this->urlDemo;
    }

    public function setUrlDemo(?string $urlDemo): static
    {
        $this->urlDemo = $urlDemo;

        return $this;
    }

    public function isMisEnAvant(): ?bool
    {
        return $this->misEnAvant;
    }

    public function setMisEnAvant(bool $misEnAvant): static
    {
        $this->misEnAvant = $misEnAvant;

        return $this;
    }

    public function isSurAccueil(): ?bool
    {
        return $this->surAccueil;
    }

    public function setSurAccueil(bool $surAccueil): static
    {
        $this->surAccueil = $surAccueil;

        return $this;
    }
}
