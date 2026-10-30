<?php

namespace App\Entity;

use App\Enum\TypeContrat;
use App\Repository\ExperienceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExperienceRepository::class)]
class Experience
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $poste = null;

    #[ORM\Column(length: 100)]
    private ?string $entreprise = null;

    #[ORM\Column(length: 255)]
    private ?string $logo = null;

    #[ORM\Column(enumType: TypeContrat::class)]
    private ?TypeContrat $typeContrat = null;

    #[ORM\Column(length: 100)]
    private ?string $lieu = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $dateFin = null;

    #[ORM\Column(options: ['default' => false])]
    private ?bool $stageBts = false;

    #[ORM\Column(length: 300)]
    private ?string $resume = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $contexte = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $missions = null;

    #[ORM\Column(length: 255)]
    private ?string $technos = null;

    #[ORM\Column(length: 255)]
    private ?string $softSkills = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $resultats = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $bilan = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPoste(): ?string
    {
        return $this->poste;
    }

    public function setPoste(string $poste): static
    {
        $this->poste = $poste;

        return $this;
    }

    public function getEntreprise(): ?string
    {
        return $this->entreprise;
    }

    public function setEntreprise(string $entreprise): static
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): static
    {
        $this->logo = $logo;

        return $this;
    }

    public function getTypeContrat(): ?TypeContrat
    {
        return $this->typeContrat;
    }

    public function setTypeContrat(TypeContrat $typeContrat): static
    {
        $this->typeContrat = $typeContrat;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): static
    {
        $this->lieu = $lieu;

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

    public function isStageBts(): ?bool
    {
        return $this->stageBts;
    }

    public function setStageBts(bool $stageBts): static
    {
        $this->stageBts = $stageBts;

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

    public function getMissions(): ?string
    {
        return $this->missions;
    }

    public function setMissions(string $missions): static
    {
        $this->missions = $missions;

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

    public function setSoftSkills(string $softSkills): static
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
}
