<?php

namespace App\Entity;

use App\Repository\Chart2ControllerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Chart2ControllerRepository::class)]
class Chart2Controller
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
