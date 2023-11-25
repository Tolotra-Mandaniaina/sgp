<?php

namespace App\Entity;

use App\Repository\ApportRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ApportRepository::class)]
class Apport
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $provenance = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nature = null;

    #[ORM\Column(nullable: true)]
    private ?int $valeur = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_estimative_delivrance = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $date_reel_delivrance = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $piece_justificative = null;

    #[ORM\ManyToOne(inversedBy: 'apport')]
    private ?Projet $projet = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProvenance(): ?string
    {
        return $this->provenance;
    }

    public function setProvenance(?string $provenance): static
    {
        $this->provenance = $provenance;

        return $this;
    }

    public function getNature(): ?string
    {
        return $this->nature;
    }

    public function setNature(?string $nature): static
    {
        $this->nature = $nature;

        return $this;
    }

    public function getValeur(): ?int
    {
        return $this->valeur;
    }

    public function setValeur(?int $valeur): static
    {
        $this->valeur = $valeur;

        return $this;
    }

    public function getDateEstimativeDelivrance(): ?\DateTimeInterface
    {
        return $this->date_estimative_delivrance;
    }

    public function setDateEstimativeDelivrance(?\DateTimeInterface $date_estimative_delivrance): static
    {
        $this->date_estimative_delivrance = $date_estimative_delivrance;

        return $this;
    }

    public function getDateReelDelivrance(): ?string
    {
        return $this->date_reel_delivrance;
    }

    public function setDateReelDelivrance(?string $date_reel_delivrance): static
    {
        $this->date_reel_delivrance = $date_reel_delivrance;

        return $this;
    }

    public function getPieceJustificative(): ?string
    {
        return $this->piece_justificative;
    }

    public function setPieceJustificative(?string $piece_justificative): static
    {
        $this->piece_justificative = $piece_justificative;

        return $this;
    }

    public function getProjet(): ?Projet
    {
        return $this->projet;
    }

    public function setProjet(?Projet $projet): static
    {
        $this->projet = $projet;

        return $this;
    }

            // Dans App\Entity\Apport
        public function __toString()
        {
            return 'Apport #' . $this->getId(); // Ou toute autre représentation significative
        }

}
