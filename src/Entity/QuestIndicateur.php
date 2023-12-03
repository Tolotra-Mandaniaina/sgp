<?php

namespace App\Entity;

use App\Repository\QuestIndicateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuestIndicateurRepository::class)]
class QuestIndicateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $labelquest = null;

    #[ORM\OneToMany(mappedBy: 'questid', targetEntity: AllIndicateur::class)]
    private Collection $allIndicateurs;

    public function __construct()
    {
        $this->allIndicateurs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabelquest(): ?string
    {
        return $this->labelquest;
    }

    public function setLabelquest(?string $labelquest): static
    {
        $this->labelquest = $labelquest;

        return $this;
    }

    /**
     * @return Collection<int, AllIndicateur>
     */
    public function getAllIndicateurs(): Collection
    {
        return $this->allIndicateurs;
    }

    public function addAllIndicateur(AllIndicateur $allIndicateur): static
    {
        if (!$this->allIndicateurs->contains($allIndicateur)) {
            $this->allIndicateurs->add($allIndicateur);
            $allIndicateur->setQuestid($this);
        }

        return $this;
    }

    public function removeAllIndicateur(AllIndicateur $allIndicateur): static
    {
        if ($this->allIndicateurs->removeElement($allIndicateur)) {
            // set the owning side to null (unless already changed)
            if ($allIndicateur->getQuestid() === $this) {
                $allIndicateur->setQuestid(null);
            }
        }

        return $this;
    }
      // Ajoutez cette méthode
      public function __toString()
      {
          return $this->labelquest;
      }
}
