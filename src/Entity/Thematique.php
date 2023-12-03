<?php

namespace App\Entity;

use App\Repository\ThematiqueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ThematiqueRepository::class)]
class Thematique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $label = null;

    #[ORM\OneToMany(mappedBy: 'thematique', targetEntity: AllIndicateur::class)]
    private Collection $allIndicateurs;

    #[ORM\Column(length: 255)]
    private ?string $style = null;

    public function __construct()
    {
        $this->allIndicateurs = new ArrayCollection();
    }

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
            $allIndicateur->setThematique($this);
        }

        return $this;
    }

    public function removeAllIndicateur(AllIndicateur $allIndicateur): static
    {
        if ($this->allIndicateurs->removeElement($allIndicateur)) {
            // set the owning side to null (unless already changed)
            if ($allIndicateur->getThematique() === $this) {
                $allIndicateur->setThematique(null);
            }
        }

        return $this;
    }
    // Ajoutez cette méthode
    public function __toString()
    {
        return $this->label;
    }

    public function getStyle(): ?string
    {
        return $this->style;
    }

    public function setStyle(string $style): static
    {
        $this->style = $style;

        return $this;
    }
}
