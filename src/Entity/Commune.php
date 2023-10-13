<?php

namespace App\Entity;

use App\Repository\CommuneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommuneRepository::class)]
class Commune
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $label = null;

    #[ORM\ManyToOne(inversedBy: 'communes')]
    private ?District $district = null;

    #[ORM\OneToMany(mappedBy: 'commune', targetEntity: UserSimple::class)]
    private Collection $userSimples;

    public function __construct()
    {
        $this->userSimples = new ArrayCollection();
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

    public function getDistrict(): ?District
    {
        return $this->district;
    }

    public function setDistrict(?District $district): static
    {
        $this->district = $district;

        return $this;
    }
    public function __toString()
    {
        return $this->label;
    }

    /**
     * @return Collection<int, UserSimple>
     */
    public function getUserSimples(): Collection
    {
        return $this->userSimples;
    }

    public function addUserSimple(UserSimple $userSimple): static
    {
        if (!$this->userSimples->contains($userSimple)) {
            $this->userSimples->add($userSimple);
            $userSimple->setCommune($this);
        }

        return $this;
    }

    public function removeUserSimple(UserSimple $userSimple): static
    {
        if ($this->userSimples->removeElement($userSimple)) {
            // set the owning side to null (unless already changed)
            if ($userSimple->getCommune() === $this) {
                $userSimple->setCommune(null);
            }
        }

        return $this;
    }
}
