<?php

namespace App\Entity;

use App\Repository\IdentificationProjetRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IdentificationProjetRepository::class)]
class IdentificationProjet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $_id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $formhub_uuid = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $start = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $end = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $today = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $deviceid = null;

    #[ORM\Column(name:"A1", length: 255, nullable: true)]
    private ?string $A1 = null;

    #[ORM\Column(name:"A2",length: 255, nullable: true)]
    private ?string $A2 = null;

    #[ORM\Column(name:"A3",length: 255, nullable: true)]
    private ?string $A3 = null;

    #[ORM\Column(name:"A4",length: 255, nullable: true)]
    private ?string $A4 = null;

    #[ORM\Column(name:"A5",length: 255, nullable: true)]
    private ?string $A5 = null;

    #[ORM\Column(name:"A6a",length: 255, nullable: true)]
    private ?string $A6a = null;

    #[ORM\Column(name:"A6b",length: 255, nullable: true)]
    private ?string $A6b = null;

    #[ORM\Column(name:"A6c",length: 255, nullable: true)]
    private ?string $A6c = null;

    #[ORM\Column(name:"A6d",length: 255, nullable: true)]
    private ?string $A6d = null;

    #[ORM\Column(name:"A6e",length: 255, nullable: true)]
    private ?string $A6e = null;

    #[ORM\Column(name:"A6f",length: 255, nullable: true)]
    private ?string $A6f = null;

    #[ORM\Column(name:"A6g",length: 255, nullable: true)]
    private ?string $A6g = null;

    #[ORM\Column(name:"A6h",length: 255, nullable: true)]
    private ?string $A6h = null;

    #[ORM\Column(name:"A6i",length: 255, nullable: true)]
    private ?string $A6i = null;

    #[ORM\Column(name:"A6j",length: 255, nullable: true)]
    private ?string $A6j = null;

    #[ORM\Column(name:"A7",length: 255, nullable: true)]
    private ?string $A7 = null;

    #[ORM\Column(name:"A8",length: 255, nullable: true)]
    private ?string $A8 = null;

    #[ORM\Column(name:"A9",length: 255, nullable: true)]
    private ?string $A9 = null;

    #[ORM\Column(name:"A10",length: 255, nullable: true)]
    private ?string $A10 = null;

    #[ORM\Column(name:"A11",length: 255, nullable: true)]
    private ?string $A11 = null;

    #[ORM\Column(name:"A12",length: 255, nullable: true)]
    private ?string $A12 = null;

    #[ORM\Column(name:"A13",length: 255, nullable: true)]
    private ?string $A13 = null;

    #[ORM\Column(name:"A13a",length: 255, nullable: true)]
    private ?string $A13a = null;

    #[ORM\Column(name:"A14",length: 255, nullable: true)]
    private ?string $A14 = null;

    #[ORM\Column(name:"A15",length: 255, nullable: true)]
    private ?string $A15 = null;

    #[ORM\Column(name:"A16",length: 255, nullable: true)]
    private ?string $A16 = null;

    #[ORM\Column(name:"A17",length: 255, nullable: true)]
    private ?string $A17 = null;

    #[ORM\Column(name:"A18",length: 255, nullable: true)]
    private ?string $A18 = null;

    #[ORM\Column(name:"A19",length: 255, nullable: true)]
    private ?string $A19 = null;


    #[ORM\Column(name:"A19a",length: 255, nullable: true)]
    private ?string $A19a = null;

    #[ORM\Column(name:"A19b",length: 255, nullable: true)]
    private ?string $A19b = null;


    #[ORM\Column(name:"A19c",length: 255, nullable: true)]
    private ?string $A19c = null;


    #[ORM\Column(name:"A19d",length: 255, nullable: true)]
    private ?string $A19d = null;


    #[ORM\Column(name:"A19e",length: 255, nullable: true)]
    private ?string $A19e = null;

    #[ORM\Column(name:"A19f",length: 255, nullable: true)]
    private ?string $A19f = null;

    #[ORM\Column(name:"A19g",length: 255, nullable: true)]
    private ?string $A19g = null;

    #[ORM\Column(name:"A19h",length: 255, nullable: true)]
    private ?string $A19h = null;

    #[ORM\Column(name:"A19i",length: 255, nullable: true)]
    private ?string $A19i = null;

    #[ORM\Column(name:"A20",length: 255, nullable: true)]
    private ?string $A20 = null;

    #[ORM\Column(name:"A21",length: 255, nullable: true)]
    private ?string $A21 = null;

    #[ORM\Column(name:"A22",length: 255, nullable: true)]
    private ?string $A22 = null;

    #[ORM\Column(name:"A23",length: 255, nullable: true)]
    private ?string $A23 = null;

    #[ORM\Column(name:"A24",length: 255, nullable: true)]
    private ?string $A24 = null;

    #[ORM\Column(name:"A25",length: 255, nullable: true)]
    private ?string $A25 = null;

    #[ORM\Column(name:"A26",length: 255, nullable: true)]
    private ?string $A26 = null;

    #[ORM\Column(name:"A27",length: 255, nullable: true)]
    private ?string $A27 = null;

    #[ORM\Column(name:"A28",length: 255, nullable: true)]
    private ?string $A28 = null;

    #[ORM\Column(name:"A29",length: 255, nullable: true)]
    private ?string $A29 = null;

    #[ORM\Column(name:"A30",length: 255, nullable: true)]
    private ?string $A30 = null;

    #[ORM\Column(name:"A31",length: 255, nullable: true)]
    private ?string $A31 = null;

    #[ORM\Column(name:"A32",length: 255, nullable: true)]
    private ?string $A32 = null;

    #[ORM\Column(name:"A33",length: 255, nullable: true)]
    private ?string $A33 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?string $_id): static
    {
        $this->_id = $_id;

        return $this;
    }

    public function getFormhubUuid(): ?string
    {
        return $this->formhub_uuid;
    }

    public function setFormhubUuid(?string $formhub_uuid): static
    {
        $this->formhub_uuid = $formhub_uuid;

        return $this;
    }

    public function getStart(): ?string
    {
        return $this->start;
    }

    public function setStart(?string $start): static
    {
        $this->start = $start;

        return $this;
    }

    public function getEnd(): ?string
    {
        return $this->end;
    }

    public function setEnd(?string $end): static
    {
        $this->end = $end;

        return $this;
    }

    public function getToday(): ?string
    {
        return $this->today;
    }

    public function setToday(?string $today): static
    {
        $this->today = $today;

        return $this;
    }

    public function getDeviceid(): ?string
    {
        return $this->deviceid;
    }

    public function setDeviceid(?string $deviceid): static
    {
        $this->deviceid = $deviceid;

        return $this;
    }

    public function getA1(): ?string
    {
        return $this->A1;
    }

    public function setA1(?string $A1): static
    {
        $this->A1 = $A1;

        return $this;
    }

    public function getA2(): ?string
    {
        return $this->A2;
    }

    public function setA2(?string $A2): static
    {
        $this->A2 = $A2;

        return $this;
    }

    public function getA3(): ?string
    {
        return $this->A3;
    }

    public function setA3(?string $A3): static
    {
        $this->A3 = $A3;

        return $this;
    }

    public function getA4(): ?string
    {
        return $this->A4;
    }

    public function setA4(?string $A4): static
    {
        $this->A4 = $A4;

        return $this;
    }

    public function getA5(): ?string
    {
        return $this->A5;
    }

    public function setA5(?string $A5): static
    {
        $this->A5 = $A5;

        return $this;
    }

    public function getA6a(): ?string
    {
        return $this->A6a;
    }

    public function setA6a(?string $A6a): static
    {
        $this->A6a = $A6a;

        return $this;
    }

    public function getA6b(): ?string
    {
        return $this->A6b;
    }

    public function setA6b(?string $A6b): static
    {
        $this->A6b = $A6b;

        return $this;
    }

    public function getA6c(): ?string
    {
        return $this->A6c;
    }

    public function setA6c(?string $A6c): static
    {
        $this->A6c = $A6c;

        return $this;
    }

    public function getA6d(): ?string
    {
        return $this->A6d;
    }

    public function setA6d(?string $A6d): static
    {
        $this->A6d = $A6d;

        return $this;
    }

    public function getA6e(): ?string
    {
        return $this->A6e;
    }

    public function setA6e(?string $A6e): static
    {
        $this->A6e = $A6e;

        return $this;
    }

    public function getA6f(): ?string
    {
        return $this->A6f;
    }

    public function setA6f(?string $A6f): static
    {
        $this->A6f = $A6f;

        return $this;
    }

    public function getA6g(): ?string
    {
        return $this->A6g;
    }

    public function setA6g(?string $A6g): static
    {
        $this->A6g = $A6g;

        return $this;
    }

    public function getA6h(): ?string
    {
        return $this->A6h;
    }

    public function setA6h(?string $A6h): static
    {
        $this->A6h = $A6h;

        return $this;
    }

    public function getA6i(): ?string
    {
        return $this->A6i;
    }

    public function setA6i(?string $A6i): static
    {
        $this->A6i = $A6i;

        return $this;
    }

    public function getA6j(): ?string
    {
        return $this->A6j;
    }

    public function setA6j(?string $A6j): static
    {
        $this->A6j = $A6j;

        return $this;
    }

    public function getA7(): ?string
    {
        return $this->A7;
    }

    public function setA7(?string $A7): static
    {
        $this->A7 = $A7;

        return $this;
    }

    public function getA8(): ?string
    {
        return $this->A8;
    }

    public function setA8(?string $A8): static
    {
        $this->A8 = $A8;

        return $this;
    }

    public function getA9(): ?string
    {
        return $this->A9;
    }

    public function setA9(?string $A9): static
    {
        $this->A9 = $A9;

        return $this;
    }

    public function getA10(): ?string
    {
        return $this->A10;
    }

    public function setA10(?string $A10): static
    {
        $this->A10 = $A10;

        return $this;
    }

    public function getA11(): ?string
    {
        return $this->A11;
    }

    public function setA11(?string $A11): static
    {
        $this->A11 = $A11;

        return $this;
    }

    public function getA12(): ?string
    {
        return $this->A12;
    }

    public function setA12(?string $A12): static
    {
        $this->A12 = $A12;

        return $this;
    }

    public function getA13(): ?string
    {
        return $this->A13;
    }

    public function setA13(?string $A13): static
    {
        $this->A13 = $A13;

        return $this;
    }

    public function getA13a(): ?string
    {
        return $this->A13a;
    }

    public function setA13a(?string $A13a): static
    {
        $this->A13a = $A13a;

        return $this;
    }

    public function getA14(): ?string
    {
        return $this->A14;
    }

    public function setA14(?string $A14): static
    {
        $this->A14 = $A14;

        return $this;
    }

    public function getA15(): ?string
    {
        return $this->A15;
    }

    public function setA15(?string $A15): static
    {
        $this->A15 = $A15;

        return $this;
    }

    public function getA16(): ?string
    {
        return $this->A16;
    }

    public function setA16(?string $A16): static
    {
        $this->A16 = $A16;

        return $this;
    }

    public function getA17(): ?string
    {
        return $this->A17;
    }

    public function setA17(?string $A17): static
    {
        $this->A17 = $A17;

        return $this;
    }

    public function getA18(): ?string
    {
        return $this->A18;
    }

    public function setA18(?string $A18): static
    {
        $this->A18 = $A18;

        return $this;
    }

    public function getA19(): ?string
    {
        return $this->A19;
    }

    public function setA19(?string $A19): static
    {
        $this->A19 = $A19;

        return $this;
    }
    public function getA19a(): ?string
    {
        return $this->A19a;
    }

    public function setA19a(?string $A19a): static
    {
        $this->A19a = $A19a;

        return $this;
    }
    public function getA19b(): ?string
    {
        return $this->A19b;
    }

    public function setA19b(?string $A19b): static
    {
        $this->A19b = $A19b;

        return $this;
    }
    public function getA19c(): ?string
    {
        return $this->A19c;
    }

    public function setA19c(?string $A19c): static
    {
        $this->A19c = $A19c;

        return $this;
    }
    public function getA19d(): ?string
    {
        return $this->A19d;
    }

    public function setA19d(?string $A19d): static
    {
        $this->A19d = $A19d;

        return $this;
    }
    public function getA19e(): ?string
    {
        return $this->A19e;
    }

    public function setA19e(?string $A19e): static
    {
        $this->A19e = $A19e;

        return $this;
    }
    public function getA19f(): ?string
    {
        return $this->A19f;
    }

    public function setA19f(?string $A19f): static
    {
        $this->A19f = $A19f;

        return $this;
    }
    public function getA19g(): ?string
    {
        return $this->A19g;
    }

    public function setA19g(?string $A19g): static
    {
        $this->A19g = $A19g;

        return $this;
    }
    public function getA19h(): ?string
    {
        return $this->A19h;
    }

    public function setA19h(?string $A19h): static
    {
        $this->A19h = $A19h;

        return $this;
    }
    public function getA19i(): ?string
    {
        return $this->A19i;
    }

    public function setA19i(?string $A19i): static
    {
        $this->A19i = $A19i;

        return $this;
    }
    public function getA20(): ?string
    {
        return $this->A20;
    }

    public function setA20(?string $A20): static
    {
        $this->A20 = $A20;

        return $this;
    }

    public function getA21(): ?string
    {
        return $this->A21;
    }

    public function setA21(?string $A21): static
    {
        $this->A21 = $A21;

        return $this;
    }

    public function getA22(): ?string
    {
        return $this->A22;
    }

    public function setA22(?string $A22): static
    {
        $this->A22 = $A22;

        return $this;
    }

    public function getA23(): ?string
    {
        return $this->A23;
    }

    public function setA23(?string $A23): static
    {
        $this->A23 = $A23;

        return $this;
    }

    public function getA24(): ?string
    {
        return $this->A24;
    }

    public function setA24(?string $A24): static
    {
        $this->A24 = $A24;

        return $this;
    }

    public function getA25(): ?string
    {
        return $this->A25;
    }

    public function setA25(?string $A25): static
    {
        $this->A25 = $A25;

        return $this;
    }

    public function getA26(): ?string
    {
        return $this->A26;
    }

    public function setA26(?string $A26): static
    {
        $this->A26 = $A26;

        return $this;
    }

    public function getA27(): ?string
    {
        return $this->A27;
    }

    public function setA27(?string $A27): static
    {
        $this->A27 = $A27;

        return $this;
    }

    public function getA28(): ?string
    {
        return $this->A28;
    }

    public function setA28(?string $A28): static
    {
        $this->A28 = $A28;

        return $this;
    }

    public function getA29(): ?string
    {
        return $this->A29;
    }

    public function setA29(?string $A29): static
    {
        $this->A29 = $A29;

        return $this;
    }

    public function getA30(): ?string
    {
        return $this->A30;
    }

    public function setA30(?string $A30): static
    {
        $this->A30 = $A30;

        return $this;
    }

    public function getA31(): ?string
    {
        return $this->A31;
    }

    public function setA31(?string $A31): static
    {
        $this->A31 = $A31;

        return $this;
    }

    public function getA32(): ?string
    {
        return $this->A32;
    }

    public function setA32(?string $A32): static
    {
        $this->A32 = $A32;

        return $this;
    }
    public function getA33(): ?string
    {
        return $this->A33;
    }

    public function setA33(?string $A33): static
    {
        $this->A33 = $A33;

        return $this;
    }
}
