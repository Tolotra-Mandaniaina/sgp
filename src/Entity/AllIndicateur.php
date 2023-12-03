<?php

namespace App\Entity;

use App\Repository\AllIndicateurRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AllIndicateurRepository::class)]
class AllIndicateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $label = null;

    #[ORM\Column(length: 255)]
    private ?string $unite = null;

    #[ORM\ManyToOne(inversedBy: 'allIndicateurs')]
    private ?Thematique $thematique = null;

    #[ORM\ManyToOne(inversedBy: 'allIndicateurs')]
    private ?QuestIndicateur $questid = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getUnite(): ?string
    {
        return $this->unite;
    }

    public function setUnite(string $unite): static
    {
        $this->unite = $unite;

        return $this;
    }

    public function getThematique(): ?Thematique
    {
        return $this->thematique;
    }

    public function setThematique(?Thematique $thematique): static
    {
        $this->thematique = $thematique;

        return $this;
    }

    public function getQuestid(): ?QuestIndicateur
    {
        return $this->questid;
    }

    public function setQuestid(?QuestIndicateur $questid): static
    {
        $this->questid = $questid;

        return $this;
    }
}
