<?php

namespace App\Entity;

use App\Repository\ProfilRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfilRepository::class)]
class Profil
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 50)]
    private ?string $prenom = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $dateNaissance = null;

    #[ORM\Column(length: 60, nullable: true)]
    private ?string $ville = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $telephone = null;

    #[ORM\Column(length: 100)]
    private ?string $email = null;

    #[ORM\Column(length: 150, nullable: true)]
    private ?string $accroche = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $presentation = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $objectif = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $perspectives = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cv = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $statutEtudes = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $statutTravail = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $logoEtudes = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $logoTravail = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $urlGithub = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $urlLinkedin = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $parcours = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): ?\DateTime
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(?\DateTime $dateNaissance): static
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getAccroche(): ?string
    {
        return $this->accroche;
    }

    public function setAccroche(?string $accroche): static
    {
        $this->accroche = $accroche;

        return $this;
    }

    public function getPresentation(): ?string
    {
        return $this->presentation;
    }

    public function setPresentation(?string $presentation): static
    {
        $this->presentation = $presentation;

        return $this;
    }

    public function getObjectif(): ?string
    {
        return $this->objectif;
    }

    public function setObjectif(?string $objectif): static
    {
        $this->objectif = $objectif;

        return $this;
    }

    public function getPerspectives(): ?string
    {
        return $this->perspectives;
    }

    public function setPerspectives(?string $perspectives): static
    {
        $this->perspectives = $perspectives;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function getCv(): ?string
    {
        return $this->cv;
    }

    public function setCv(?string $cv): static
    {
        $this->cv = $cv;

        return $this;
    }

    public function getStatutEtudes(): ?string
    {
        return $this->statutEtudes;
    }

    public function setStatutEtudes(?string $statutEtudes): static
    {
        $this->statutEtudes = $statutEtudes;

        return $this;
    }

    public function getStatutTravail(): ?string
    {
        return $this->statutTravail;
    }

    public function setStatutTravail(?string $statutTravail): static
    {
        $this->statutTravail = $statutTravail;

        return $this;
    }

    public function getLogoEtudes(): ?string
    {
        return $this->logoEtudes;
    }

    public function setLogoEtudes(?string $logoEtudes): static
    {
        $this->logoEtudes = $logoEtudes;

        return $this;
    }

    public function getLogoTravail(): ?string
    {
        return $this->logoTravail;
    }

    public function setLogoTravail(?string $logoTravail): static
    {
        $this->logoTravail = $logoTravail;

        return $this;
    }

    public function getUrlGithub(): ?string
    {
        return $this->urlGithub;
    }

    public function setUrlGithub(?string $urlGithub): static
    {
        $this->urlGithub = $urlGithub;

        return $this;
    }

    public function getUrlLinkedin(): ?string
    {
        return $this->urlLinkedin;
    }

    public function setUrlLinkedin(?string $urlLinkedin): static
    {
        $this->urlLinkedin = $urlLinkedin;

        return $this;
    }

    public function getParcours(): ?string
    {
        return $this->parcours;
    }

    public function setParcours(?string $parcours): static
    {
        $this->parcours = $parcours;

        return $this;
    }
}
