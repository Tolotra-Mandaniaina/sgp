<?php

namespace App\Entity;

use App\Repository\IdentificationProjetRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IdentificationProjetRepository::class)]
class IdentificationProjet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true,name: "_id")]
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

    #[ORM\Column(name:"A5_0",length: 255, nullable: true)]
    private ?int $A5_0 = null;

    #[ORM\Column(name:"A5a",length: 255, nullable: true)]
    private ?int $A5a = null;

    #[ORM\Column(name:"A5b",length: 100, nullable: true)]
    private ?string $A5b = null;

    #[ORM\Column(name:"A5c",length: 100, nullable: true)]
    private ?string $A5c = null;

    #[ORM\Column(name:"A5d",length: 100, nullable: true)]
    private ?string $A5d = null;

    #[ORM\Column(name:"A5e",length: 100, nullable: true)]
    private ?string $A5e = null;

    #[ORM\Column(name:"A5f",length: 100, nullable: true)]
    private ?string $A5f = null;
   

    #[ORM\Column(name:"A5",length: 255, nullable: true)]
    private ?string $A5 = null;

    #[ORM\Column(name:"A6", nullable: true)]
    private ?int $A6 = null;

    #[ORM\Column(name:"A6a",length: 100, nullable: true)]
    private ?string $A6a = null;

    #[ORM\Column(name:"A6b",length: 100, nullable: true)]
    private ?string $A6b = null;

    #[ORM\Column(name:"A6c",length: 100, nullable: true)]
    private ?string $A6c = null;

    #[ORM\Column(name:"A6d",length: 100, nullable: true)]
    private ?string $A6d = null;

    #[ORM\Column(name:"A6e",length: 100, nullable: true)]
    private ?string $A6e = null;

    #[ORM\Column(name:"A6f",length: 100, nullable: true)]
    private ?string $A6f = null;

    #[ORM\Column(name:"A6g",length: 100, nullable: true)]
    private ?string $A6g = null;

    #[ORM\Column(name:"A6h",length: 100, nullable: true)]
    private ?string $A6h = null;

    #[ORM\Column(name:"A6i",length: 100, nullable: true)]
    private ?string $A6i = null;

    #[ORM\Column(name:"A6j",length: 100, nullable: true)]
    private ?string $A6j = null;

    #[ORM\Column(name:"A6k",length: 100, nullable: true)]
    private ?string $A6k = null;

    #[ORM\Column(name:"A6l",length: 100, nullable: true)]
    private ?string $A6l = null;

    #[ORM\Column(name:"A6m",length: 100, nullable: true)]
    private ?string $A6m = null;

    #[ORM\Column(name:"A7",length: 255, nullable: true)]
    private ?string $A7 = null;

    #[ORM\Column(name:"A8",length: 255, nullable: true)]
    private ?string $A8 = null;

    #[ORM\Column(name:"A9",length: 255, nullable: true)]
    private ?string $A9 = null;

    #[ORM\Column(name:"A10",length: 255, nullable: true)]
    private ?string $A10 = null;

    #[ORM\Column(name:"A10a",type: "text", nullable: true)]
    private ?string $A10a = null;

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

    #[ORM\Column(name:"A14_autre",length: 255, nullable: true)]
    private ?string $A14_autre = null;

    #[ORM\Column(name:"A15",length: 255, nullable: true)]
    private ?string $A15 = null;

    #[ORM\Column(name:"A16",length: 255, nullable: true)]
    private ?string $A16 = null;

    #[ORM\Column(name:"A16_autre",type: "text", nullable: true)]
    private ?string $A16_autre = null;

    #[ORM\Column(name:"A17",length: 255, nullable: true)]
    private ?string $A17 = null;

    #[ORM\Column(name:"A18",length: 255, nullable: true)]
    private ?string $A18 = null;

    #[ORM\Column(name:"A19",length: 255, nullable: true, type:"simple_array",)]
    private ?array $A19 = null;


    #[ORM\Column(name:"A19a", nullable: true)]
    private ?int $A19a = null;

    #[ORM\Column(name:"A19b", nullable: true)]
    private ?int $A19b = null;


    #[ORM\Column(name:"A19c", nullable: true)]
    private ?int $A19c = null;


    #[ORM\Column(name:"A19d", nullable: true)]
    private ?int $A19d = null;


    #[ORM\Column(name:"A19e",  nullable: true)]
    private ?int $A19e = null;

    #[ORM\Column(name:"A19f", nullable: true)]
    private ?int $A19f = null;

    #[ORM\Column(name:"A19g", nullable: true)]
    private ?int $A19g = null;

    #[ORM\Column(name:"A19h", nullable: true)]
    private ?int $A19h = null;

    #[ORM\Column(name:"A19i", nullable: true)]
    private ?int $A19i = null;

    #[ORM\Column(name:"A20",length: 255, nullable: true, type:"simple_array")]
    private ?array $A20 = null;

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

    #[ORM\Column(name:"A34",type: "text", nullable: true)]
    private ?string $A34 = null;

    #[ORM\Column(name:"A35",type: "text", nullable: true)]
    private ?string $A35 = null;

    #[ORM\Column(name:"A5b_1", type: Types::TEXT, nullable: true)]
    private ?string $A5b_1 = null;

    #[ORM\Column(name:"A5b_2", type: Types::TEXT, nullable: true)]
    private ?string $A5b_2 = null;

    #[ORM\Column(name:"A5b_3", type: Types::TEXT, nullable: true)]
    private ?string $A5b_3 = null;

    #[ORM\Column(name:"A5b_4", type: Types::TEXT, nullable: true)]
    private ?string $A5b_4 = null;

    #[ORM\Column(name:"A5b_5", type: Types::TEXT, nullable: true)]
    private ?string $A5b_5 = null;

    #[ORM\Column(name:"A5b_6", type: Types::TEXT, nullable: true)]
    private ?string $A5b_6 = null;

    #[ORM\Column(name:"A5b_7", type: Types::TEXT, nullable: true)]
    private ?string $A5b_7 = null;

    #[ORM\Column(name:"A5b_8", type: Types::TEXT, nullable: true)]
    private ?string $A5b_8 = null;

    #[ORM\Column(name:"A5b_9", type: Types::TEXT, nullable: true)]
    private ?string $A5b_9 = null;

    #[ORM\Column(name:"A5b_10", type: Types::TEXT, nullable: true)]
    private ?string $A5b_10 = null;

    #[ORM\Column(name:"A5b_11", type: Types::TEXT, nullable: true)]
    private ?string $A5b_11 = null;

    #[ORM\Column(name:"A5b_12", type: Types::TEXT, nullable: true)]
    private ?string $A5b_12 = null;

    #[ORM\Column(name:"A5b_13", type: Types::TEXT, nullable: true)]
    private ?string $A5b_13 = null;

    #[ORM\Column(name:"A5b_14", type: Types::TEXT, nullable: true)]
    private ?string $A5b_14 = null;

    #[ORM\Column(name:"A5c_1", type: Types::TEXT)]
    private ?string $A5c_1 = null;

    #[ORM\Column(name:"A5c_2", type: Types::TEXT, nullable: true)]
    private ?string $A5c_2 = null;

    #[ORM\Column(name:"A5c_3", type: Types::TEXT, nullable: true)]
    private ?string $A5c_3 = null;

    #[ORM\Column(name:"A5c_4", type: Types::TEXT, nullable: true)]
    private ?string $A5c_4 = null;

    #[ORM\Column(name:"A5c_5", type: Types::TEXT, nullable: true)]
    private ?string $A5c_5 = null;

    #[ORM\Column(name:"A5c_6", type: Types::TEXT, nullable: true)]
    private ?string $A5c_6 = null;

    #[ORM\Column(name:"A5c_7", type: Types::TEXT, nullable: true)]
    private ?string $A5c_7 = null;

    #[ORM\Column(name:"A5c_8", type: Types::TEXT, nullable: true)]
    private ?string $A5c_8 = null;

    #[ORM\Column(name:"A5c_9", type: Types::TEXT, nullable: true)]
    private ?string $A5c_9 = null;

    #[ORM\Column(name:"A5c_10", type: Types::TEXT, nullable: true)]
    private ?string $A5c_10 = null;

    #[ORM\Column(name:"A5c_11", type: Types::TEXT, nullable: true)]
    private ?string $A5c_11 = null;

    #[ORM\Column(name:"A5c_12", type: Types::TEXT, nullable: true)]
    private ?string $A5c_12 = null;

    #[ORM\Column(name:"A5c_13", type: Types::TEXT, nullable: true)]
    private ?string $A5c_13 = null;

    #[ORM\Column(name:"A5c_14", type: Types::TEXT, nullable: true)]
    private ?string $A5c_14 = null;

    #[ORM\Column(name:"A5d_1", type: Types::TEXT, nullable: true)]
    private ?string $A5d_1 = null;

    #[ORM\Column(name:"A5d_2", type: Types::TEXT, nullable: true)]
    private ?string $A5d_2 = null;

    #[ORM\Column(name:"A5d_3", type: Types::TEXT, nullable: true)]
    private ?string $A5d_3 = null;

    #[ORM\Column(name:"A5d_4", type: Types::TEXT, nullable: true)]
    private ?string $A5d_4 = null;

    #[ORM\Column(name:"A5d_5", type: Types::TEXT, nullable: true)]
    private ?string $A5d_5 = null;

    #[ORM\Column(name:"A5d_6", type: Types::TEXT, nullable: true)]
    private ?string $A5d_6 = null;

    #[ORM\Column(name:"A5d_7", type: Types::TEXT, nullable: true)]
    private ?string $A5d_7 = null;

    #[ORM\Column(name:"A5d_8", type: Types::TEXT, nullable: true)]
    private ?string $A5d_8 = null;

    #[ORM\Column(name:"A5d_9", type: Types::TEXT, nullable: true)]
    private ?string $A5d_9 = null;

    #[ORM\Column(name:"A5d_10", type: Types::TEXT, nullable: true)]
    private ?string $A5d_10 = null;

    #[ORM\Column(name:"A5d_11", type: Types::TEXT, nullable: true)]
    private ?string $A5d_11 = null;

    #[ORM\Column(name:"A5d_12", type: Types::TEXT, nullable: true)]
    private ?string $A5d_12 = null;

    #[ORM\Column(name:"A5d_13", type: Types::TEXT, nullable: true)]
    private ?string $A5d_13 = null;

    #[ORM\Column(name:"A5d_14", type: Types::TEXT, nullable: true)]
    private ?string $A5d_14 = null;

    #[ORM\Column(name:"A5e_1", type: Types::TEXT, nullable: true)]
    private ?string $A5e_1 = null;

    #[ORM\Column(name:"A5e_2", type: Types::TEXT, nullable: true)]
    private ?string $A5e_2 = null;

    #[ORM\Column(name:"A5e_3", type: Types::TEXT, nullable: true)]
    private ?string $A5e_3 = null;

    #[ORM\Column(name:"A5e_4", type: Types::TEXT, nullable: true)]
    private ?string $A5e_4 = null;

    #[ORM\Column(name:"A5e_5", type: Types::TEXT, nullable: true)]
    private ?string $A5e_5 = null;

    #[ORM\Column(name:"A5e_6", type: Types::TEXT, nullable: true)]
    private ?string $A5e_6 = null;

    #[ORM\Column(name:"A5e_7", type: Types::TEXT, nullable: true)]
    private ?string $A5e_7 = null;

    #[ORM\Column(name:"A5e_8", type: Types::TEXT, nullable: true)]
    private ?string $A5e_8 = null;

    #[ORM\Column(name:"A5e_9", type: Types::TEXT, nullable: true)]
    private ?string $A5e_9 = null;

    #[ORM\Column(name:"A5e_10", type: Types::TEXT, nullable: true)]
    private ?string $A5e_10 = null;

    #[ORM\Column(name:"A5e_11", type: Types::TEXT, nullable: true)]
    private ?string $A5e_11 = null;

    #[ORM\Column(name:"A5e_12", type: Types::TEXT, nullable: true)]
    private ?string $A5e_12 = null;

    #[ORM\Column(name:"A5e_13", type: Types::TEXT, nullable: true)]
    private ?string $A5e_13 = null;

    #[ORM\Column(name:"A5e_14", type: Types::TEXT, nullable: true)]
    private ?string $A5e_14 = null;

    #[ORM\Column(name:"A5f_1", type: Types::TEXT, nullable: true)]
    private ?string $A5f_1 = null;

    #[ORM\Column(name:"A5f_2", type: Types::TEXT, nullable: true)]
    private ?string $A5f_2 = null;

    #[ORM\Column(name:"A5f_3", type: Types::TEXT, nullable: true)]
    private ?string $A5f_3 = null;

    #[ORM\Column(name:"A5f_4", type: Types::TEXT, nullable: true)]
    private ?string $A5f_4 = null;

    #[ORM\Column(name:"A5f_5", type: Types::TEXT, nullable: true)]
    private ?string $A5f_5 = null;

    #[ORM\Column(name:"A5f_6", type: Types::TEXT, nullable: true)]
    private ?string $A5f_6 = null;

    #[ORM\Column(name:"A5f_7", type: Types::TEXT, nullable: true)]
    private ?string $A5f_7 = null;

    #[ORM\Column(name:"A5f_8", type: Types::TEXT, nullable: true)]
    private ?string $A5f_8 = null;

    #[ORM\Column(name:"A5f_9", type: Types::TEXT, nullable: true)]
    private ?string $A5f_9 = null;

    #[ORM\Column(name:"A5f_10", type: Types::TEXT)]
    private ?string $A5f_10 = null;

    #[ORM\Column(name:"A5f_11", type: Types::TEXT, nullable: true)]
    private ?string $A5f_11 = null;

    #[ORM\Column(name:"A5f_12", type: Types::TEXT, nullable: true)]
    private ?string $A5f_12 = null;

    #[ORM\Column(name:"A5f_13", type: Types::TEXT, nullable: true)]
    private ?string $A5f_13 = null;

    #[ORM\Column(name:"A5f_14", type: Types::TEXT, nullable: true)]
    private ?string $A5f_14 = null;

    #[ORM\Column(nullable: true)]
    private ?int $StatutFiche = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function get_id(): ?string
    {
        return $this->_id;
    }

    public function set_id(?string $_id): static
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
    public function getA50(): ?int
    {
        return $this->A5_0;
    }

    public function setA50(?int $A5_0): static
    {
        $this->A5_0 = $A5_0;

        return $this;
    }

    public function getA5a(): ?int
    {
        return $this->A5a;
    }

    public function setA5a(?int $A5a): static
    {
        $this->A5a = $A5a;

        return $this;
    }

    public function getA5b(): ?string
    {
        return $this->A5b;
    }

    public function setA5b(?string $A5b): static
    {
        $this->A5b = $A5b;

        return $this;
    }
    public function getA5c(): ?string
    {
        return $this->A5c;
    }

    public function setA5c(?string $A5c): static
    {
        $this->A5c = $A5c;

        return $this;
    }
    public function getA5d(): ?string
    {
        return $this->A5d;
    }

    public function setA5d(?string $A5d): static
    {
        $this->A5d = $A5d;

        return $this;
    }
    public function getA5e(): ?string
    {
        return $this->A5e;
    }

    public function setA5e(?string $A5e): static
    {
        $this->A5e = $A5e;

        return $this;
    }
    public function getA5f(): ?string
    {
        return $this->A5f;
    }

    public function setA5f(?string $A5f): static
    {
        $this->A5f = $A5f;

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

    public function getA6(): ?string
    {
        return $this->A6;
    }

    public function setA6(?string $A6): static
    {
        $this->A6 = $A6;

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

    public function getA6k(): ?string
    {
        return $this->A6k;
    }

    public function setA6k(?string $A6k): static
    {
        $this->A6k = $A6k;

        return $this;
    }
    public function getA6l(): ?string
    {
        return $this->A6l;
    }

    public function setA6l(?string $A6l): static
    {
        $this->A6l = $A6l;

        return $this;
    }
    public function getA6m(): ?string
    {
        return $this->A6m;
    }

    public function setA6m(?string $A6m): static
    {
        $this->A6m = $A6m;

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
    public function getA10a(): ?string
    {
        return $this->A10a;
    }

    public function setA10a(?string $A10a): static
    {
        $this->A10a = $A10a;

        return $this;
    }

    public function getA11(): ?string
    {
        $value = $this->A11;

    // Ajouter une condition pour vérifier si la valeur est égale à 6
    if ($value === '1') { return 'CORE';  }
    else if ($value === '2' ) { return 'STAR';  }
    else if ($value === '3' ) { return 'ICCA - GSI';  }
   


     return $value;
    }

    public function setA11(?string $A11): static
    {
        $this->A11 = $A11;

        return $this;
    }

    public function getA12(): ?string
    {
        //$this->A12= $A12;
        


        //return $this;
        
    $value = $this->A12;

     //Ajouter une condition pour vérifier si la valeur est égale à 6
    if ($value === '1') { return 'OP 1';  }
    else if ($value === '2' ) { return 'OP 2';  }
    else if ($value === '3' ) { return 'OP 3';  }
    else if ($value === '4' ) { return 'OP 4';  }
    else if ($value === '5' ) { return 'OP 5';  }
    else if ($value === '6' ) { return 'OP 6';  }
    else if ($value === '7' ) { return 'OP 7';  }


    return $value;

    }

    public function setA12(?string $A12): static
    {
        $this->A12 = $A12;

        return $this;
    }

    public function getA13(): ?string
    {
        $value = $this->A13;

        // Ajouter une condition pour vérifier si la valeur est égale à 6
        if ($value === '1') { return 'Nord';  }
        else if ($value === '2' ) { return 'Est';  }
        else if ($value === '3' ) { return 'Sud-Ouest';  }
        else if ($value === '4' ) { return 'Centre';  }
        else if ($value === '5' ) { return 'Potentiel';  }
       
    
    
        return $value;
    }

    public function setA13(?string $A13): static
    {
        $this->A13 = $A13;

        return $this;
    }

    public function getA13a(): ?string
    {   
     $value = $this->A13a;

    // Ajouter une condition pour vérifier si la valeur est égale à 6
    if ($value === '1') { return 'Région Amoron\'i Mania';  }
    else if ($value === '2' ) { return 'Région Analamanga';  }
    else if ($value === '3' ) { return 'Région Vakinankaratra';  }
    else if ($value === '4' ) { return 'Région Itasy';  }
    else if ($value === '5' ) { return 'Région Anosy';  }
    else if ($value === '6' ) { return 'Région Androy';  }
    else if ($value === '6' ) { return 'Région Haute Matsiatra';  }


    return $value;
    }

    public function setA13a(?string $A13a): static
    {
        $this->A13a = $A13a;

        return $this;
    }

    public function getA14(): ?string
    {
        $value = $this->A14;

        // Ajouter une condition pour vérifier si la valeur est égale à 6
        if ($value === '1') { return 'Ambaro';  }
        else if ($value === '2' ) { return 'Comatsa';  }
        else if ($value === '3' ) { return 'Mamabay';  }
        else if ($value === '4' ) { return 'Caz';  }
        else if ($value === '5' ) { return 'Cofam';  }
        else if ($value === '6' ) { return 'Mahafaly';  }
        else if ($value === '7' ) { return 'Mikea';  }
        else if ($value === '77' ) { return 'Autres';  }

    
    
        return $value;
    }

    public function setA14(?string $A14): static
    {
        $this->A14 = $A14;

        return $this;
    }
    public function getA14autre(): ?string
    {
        return $this->A14_autre;
    }

    public function setA14autre(?string $A14_autre): static
    {
        $this->A14_autre = $A14_autre;

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

        $value = $this->A16;

        // Ajouter une condition pour vérifier si la valeur est égale à 6
        if ($value === '1') { return 'Project activities completed';  }
        else if ($value === '2' ) { return 'Final reports pending';  }
        else if ($value === '3' ) { return 'Project Terminated Before Completion';  }
        else if ($value === '4' ) { return 'Satisfactorily Completed';  }
        else if ($value === '77' ) { return 'Autre';  }
     
    
        return $value;
    }

    public function setA16(?string $A16): static
    {
        $this->A16 = $A16;

        return $this;
    }
    public function getA16autre(): ?string
    {
        return $this->A16_autre;
    }

    public function setA16autre(?string $A16_autre): static
    {
        $this->A16_autre = $A16_autre;

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
   
     /*
    public function getA19(): ?array
    {
            // Récupérer la valeur de A19
        $value = $this->A19;

        // Définir une correspondance entre les nombres et leurs libellés
        $labelMapping = [
            '1' =>  'Biodiversité',
            '2' =>  'Atténuation_du_changement_climatique',
            '3' =>  'Dégradation_des_sols',
            '4' =>  'Gestion_durable_des_forêts',
            '5' =>  'Eaux_internationales',
            '6' =>  'Produits_chimiques_et_déchets',
            '7' =>  'Développement_des_capacités',
            '8' =>  'Dialogue_public_société_civile',
            '9' =>   'Aire_et_patrimoine_des_peuples_autochtones'
        ];

        // Si $value est un tableau, convertissez-le en chaîne
       if (is_array($value)) {
       $value = implode(' ', $value);
       }

        // Diviser la chaîne en nombres
        $numbers = explode(' ', $value);

        // Remplacer les nombres par leurs libellés correspondants
        $labels = array_map(function ($number) use ($labelMapping) {
            return $labelMapping[$number] ?? $number;
        }, $numbers);

        // Joindre les libellés avec '/'
        $result = implode(',', $labels);

        return $result;
    }
    
  */
    
    public function getA19(): ?array
    {
        return $this->A19;
    }
    
    public function setA19(?array $A19): static
    {
        $this->A19 = $A19;

        return $this;
    }
    public function getA19a(): ?int
    {
        return $this->A19a;
    }

    public function setA19a(?int $A19a): static
    {
        $this->A19a = $A19a;

        return $this;
    }
    public function getA19b(): ?int
    {
        return $this->A19b;
    }

    public function setA19b(?int $A19b): static
    {
        $this->A19b = $A19b;

        return $this;
    }
    public function getA19c(): ?int
    {
        return $this->A19c;
    }

    public function setA19c(?int $A19c): static
    {
        $this->A19c = $A19c;

        return $this;
    }
    public function getA19d(): ?int
    {
        return $this->A19d;
    }

    public function setA19d(?int $A19d): static
    {
        $this->A19d = $A19d;

        return $this;
    }
    public function getA19e(): ?int
    {
        return $this->A19e;
    }

    public function setA19e(?int $A19e): static
    {
        $this->A19e = $A19e;

        return $this;
    }
    public function getA19f(): ?int
    {
        return $this->A19f;
    }

    public function setA19f(?int $A19f): static
    {
        $this->A19f = $A19f;

        return $this;
    }
    public function getA19g(): ?int
    {
        return $this->A19g;
    }

    public function setA19g(?int $A19g): static
    {
        $this->A19g = $A19g;

        return $this;
    }
    public function getA19h(): ?int
    {
        return $this->A19h;
    }

    public function setA19h(?int $A19h): static
    {
        $this->A19h = $A19h;

        return $this;
    }
    public function getA19i(): ?int
    {
        return $this->A19i;
    }

    public function setA19i(?int $A19i): static
    {
        $this->A19i = $A19i;

        return $this;
    }
    public function getA20(): ?array
    {
        return $this->A20;

        return $this;
    }

    public function setA20(?array $A20): static
    {
        $this->A20 = $A20;

        return $this;
    }

    public function getA21(): ?string
    {
        
        $value = $this->A21;

        // Ajouter une condition pour vérifier si la valeur est égale à 6
        if ($value === '1') { return 'Homme';  }
        else if ($value === '2' ) { return 'Femme';  }
       
     
    
        return $value;
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
    public function getA34(): ?string
    {
        return $this->A34;
    }

    public function setA34(?string $A34): static
    {
        $this->A34 = $A34;

        return $this;
    }
    public function getA35(): ?string
    {
        $value = $this->A16;

        // Ajouter une condition pour vérifier si la valeur est égale à 6
        if ($value === '1') { return 'Trimestre 1';  }
        else if ($value === '2' ) { return 'Trimestre 2';  }
        else if ($value === '3' ) { return 'Trimestre 3';  }
        else if ($value === '4' ) { return 'Trimestre 4';  }
     
    
        return $value;
    }

    public function setA35(?string $A35): static
    {
        $this->A35 = $A35;

        return $this;
    }
     // Ajoutez cette méthode
     public function __toString()
     {
         return $this->_id;
     }

     public function getA5b1(): ?string
     {
         return $this->A5b_1;
     }

     public function setA5b1(?string $A5b_1): static
     {
         $this->A5b_1 = $A5b_1;

         return $this;
     }

     public function getA5b2(): ?string
     {
         return $this->A5b_2;
     }

     public function setA5b2(?string $A5b_2): static
     {
         $this->A5b_2 = $A5b_2;

         return $this;
     }

     public function getA5b3(): ?string
     {
         return $this->A5b_3;
     }

     public function setA5b3(?string $A5b_3): static
     {
         $this->A5b_3 = $A5b_3;

         return $this;
     }

     public function getA5b4(): ?string
     {
         return $this->A5b_4;
     }

     public function setA5b4(?string $A5b_4): static
     {
         $this->A5b_4 = $A5b_4;

         return $this;
     }

     public function getA5b5(): ?string
     {
         return $this->A5b_5;
     }

     public function setA5b5(?string $A5b_5): static
     {
         $this->A5b_5 = $A5b_5;

         return $this;
     }

     public function getA5b6(): ?string
     {
         return $this->A5b_6;
     }

     public function setA5b6(?string $A5b_6): static
     {
         $this->A5b_6 = $A5b_6;

         return $this;
     }

     public function getA5b7(): ?string
     {
         return $this->A5b_7;
     }

     public function setA5b7(?string $A5b_7): static
     {
         $this->A5b_7 = $A5b_7;

         return $this;
     }

     public function getA5b8(): ?string
     {
         return $this->A5b_8;
     }

     public function setA5b8(?string $A5b_8): static
     {
         $this->A5b_8 = $A5b_8;

         return $this;
     }

     public function getA5b9(): ?string
     {
         return $this->A5b_9;
     }

     public function setA5b9(?string $A5b_9): static
     {
         $this->A5b_9 = $A5b_9;

         return $this;
     }

     public function getA5b10(): ?string
     {
         return $this->A5b_10;
     }

     public function setA5b10(?string $A5b_10): static
     {
         $this->A5b_10 = $A5b_10;

         return $this;
     }

     public function getA5b11(): ?string
     {
         return $this->A5b_11;
     }

     public function setA5b11(?string $A5b_11): static
     {
         $this->A5b_11 = $A5b_11;

         return $this;
     }

     public function getA5b12(): ?string
     {
         return $this->A5b_12;
     }

     public function setA5b12(?string $A5b_12): static
     {
         $this->A5b_12 = $A5b_12;

         return $this;
     }

     public function getA5b13(): ?string
     {
         return $this->A5b_13;
     }

     public function setA5b13(?string $A5b_13): static
     {
         $this->A5b_13 = $A5b_13;

         return $this;
     }

     public function getA5b14(): ?string
     {
         return $this->A5b_14;
     }

     public function setA5b14(?string $A5b_14): static
     {
         $this->A5b_14 = $A5b_14;

         return $this;
     }

     public function getA5c1(): ?string
     {
         return $this->A5c_1;
     }

     public function setA5c1(string $A5c_1): static
     {
         $this->A5c_1 = $A5c_1;

         return $this;
     }

     public function getA5c2(): ?string
     {
         return $this->A5c_2;
     }

     public function setA5c2(?string $A5c_2): static
     {
         $this->A5c_2 = $A5c_2;

         return $this;
     }

     public function getA5c3(): ?string
     {
         return $this->A5c_3;
     }

     public function setA5c3(?string $A5c_3): static
     {
         $this->A5c_3 = $A5c_3;

         return $this;
     }

     public function getA5c4(): ?string
     {
         return $this->A5c_4;
     }

     public function setA5c4(?string $A5c_4): static
     {
         $this->A5c_4 = $A5c_4;

         return $this;
     }

     public function getA5c5(): ?string
     {
         return $this->A5c_5;
     }

     public function setA5c5(?string $A5c_5): static
     {
         $this->A5c_5 = $A5c_5;

         return $this;
     }

     public function getA5c6(): ?string
     {
         return $this->A5c_6;
     }

     public function setA5c6(?string $A5c_6): static
     {
         $this->A5c_6 = $A5c_6;

         return $this;
     }

     public function getA5c7(): ?string
     {
         return $this->A5c_7;
     }

     public function setA5c7(?string $A5c_7): static
     {
         $this->A5c_7 = $A5c_7;

         return $this;
     }

     public function getA5c8(): ?string
     {
         return $this->A5c_8;
     }

     public function setA5c8(?string $A5c_8): static
     {
         $this->A5c_8 = $A5c_8;

         return $this;
     }

     public function getA5c9(): ?string
     {
         return $this->A5c_9;
     }

     public function setA5c9(?string $A5c_9): static
     {
         $this->A5c_9 = $A5c_9;

         return $this;
     }

     public function getA5c10(): ?string
     {
         return $this->A5c_10;
     }

     public function setA5c10(?string $A5c_10): static
     {
         $this->A5c_10 = $A5c_10;

         return $this;
     }

     public function getA5c11(): ?string
     {
         return $this->A5c_11;
     }

     public function setA5c11(?string $A5c_11): static
     {
         $this->A5c_11 = $A5c_11;

         return $this;
     }

     public function getA5c12(): ?string
     {
         return $this->A5c_12;
     }

     public function setA5c12(?string $A5c_12): static
     {
         $this->A5c_12 = $A5c_12;

         return $this;
     }

     public function getA5c13(): ?string
     {
         return $this->A5c_13;
     }

     public function setA5c13(?string $A5c_13): static
     {
         $this->A5c_13 = $A5c_13;

         return $this;
     }

     public function getA5c14(): ?string
     {
         return $this->A5c_14;
     }

     public function setA5c14(?string $A5c_14): static
     {
         $this->A5c_14 = $A5c_14;

         return $this;
     }

     public function getA5d1(): ?string
     {
         return $this->A5d_1;
     }

     public function setA5d1(?string $A5d_1): static
     {
         $this->A5d_1 = $A5d_1;

         return $this;
     }

     public function getA5d2(): ?string
     {
         return $this->A5d_2;
     }

     public function setA5d2(?string $A5d_2): static
     {
         $this->A5d_2 = $A5d_2;

         return $this;
     }

     public function getA5d3(): ?string
     {
         return $this->A5d_3;
     }

     public function setA5d3(?string $A5d_3): static
     {
         $this->A5d_3 = $A5d_3;

         return $this;
     }

     public function getA5d4(): ?string
     {
         return $this->A5d_4;
     }

     public function setA5d4(?string $A5d_4): static
     {
         $this->A5d_4 = $A5d_4;

         return $this;
     }

     public function getA5d5(): ?string
     {
         return $this->A5d_5;
     }

     public function setA5d5(?string $A5d_5): static
     {
         $this->A5d_5 = $A5d_5;

         return $this;
     }

     public function getA5d6(): ?string
     {
         return $this->A5d_6;
     }

     public function setA5d6(?string $A5d_6): static
     {
         $this->A5d_6 = $A5d_6;

         return $this;
     }

     public function getA5d7(): ?string
     {
         return $this->A5d_7;
     }

     public function setA5d7(?string $A5d_7): static
     {
         $this->A5d_7 = $A5d_7;

         return $this;
     }

     public function getA5d8(): ?string
     {
         return $this->A5d_8;
     }

     public function setA5d8(?string $A5d_8): static
     {
         $this->A5d_8 = $A5d_8;

         return $this;
     }

     public function getA5d9(): ?string
     {
         return $this->A5d_9;
     }

     public function setA5d9(?string $A5d_9): static
     {
         $this->A5d_9 = $A5d_9;

         return $this;
     }

     public function getA5d10(): ?string
     {
         return $this->A5d_10;
     }

     public function setA5d10(?string $A5d_10): static
     {
         $this->A5d_10 = $A5d_10;

         return $this;
     }

     public function getA5d11(): ?string
     {
         return $this->A5d_11;
     }

     public function setA5d11(?string $A5d_11): static
     {
         $this->A5d_11 = $A5d_11;

         return $this;
     }

     public function getA5d12(): ?string
     {
         return $this->A5d_12;
     }

     public function setA5d12(?string $A5d_12): static
     {
         $this->A5d_12 = $A5d_12;

         return $this;
     }

     public function getA5d13(): ?string
     {
         return $this->A5d_13;
     }

     public function setA5d13(?string $A5d_13): static
     {
         $this->A5d_13 = $A5d_13;

         return $this;
     }

     public function getA5d14(): ?string
     {
         return $this->A5d_14;
     }

     public function setA5d14(?string $A5d_14): static
     {
         $this->A5d_14 = $A5d_14;

         return $this;
     }

     public function getA5e1(): ?string
     {
         return $this->A5e_1;
     }

     public function setA5e1(?string $A5e_1): static
     {
         $this->A5e_1 = $A5e_1;

         return $this;
     }

     public function getA5e2(): ?string
     {
         return $this->A5e_2;
     }

     public function setA5e2(?string $A5e_2): static
     {
         $this->A5e_2 = $A5e_2;

         return $this;
     }

     public function getA5e3(): ?string
     {
         return $this->A5e_3;
     }

     public function setA5e3(?string $A5e_3): static
     {
         $this->A5e_3 = $A5e_3;

         return $this;
     }

     public function getA5e4(): ?string
     {
         return $this->A5e_4;
     }

     public function setA5e4(?string $A5e_4): static
     {
         $this->A5e_4 = $A5e_4;

         return $this;
     }

     public function getA5e5(): ?string
     {
         return $this->A5e_5;
     }

     public function setA5e5(?string $A5e_5): static
     {
         $this->A5e_5 = $A5e_5;

         return $this;
     }

     public function getA5e6(): ?string
     {
         return $this->A5e_6;
     }

     public function setA5e6(?string $A5e_6): static
     {
         $this->A5e_6 = $A5e_6;

         return $this;
     }

     function getA5e7(): ?string
     {
         return $this->A5e_7;
     }

     public function setA5e7(?string $A5e_7): static
     {
         $this->A5e_7 = $A5e_7;

         return $this;
     }

     public function getA5e8(): ?string
     {
         return $this->A5e_8;
     }

     public function setA5e8(?string $A5e_8): static
     {
         $this->A5e_8 = $A5e_8;

         return $this;
     }

     public function getA5e9(): ?string
     {
         return $this->A5e_9;
     }

     public function setA5e9(?string $A5e_9): static
     {
         $this->A5e_9 = $A5e_9;

         return $this;
     }

     public function getA5e10(): ?string
     {
         return $this->A5e_10;
     }

     public function setA5e10(?string $A5e_10): static
     {
         $this->A5e_10 = $A5e_10;

         return $this;
     }

     public function getA5e11(): ?string
     {
         return $this->A5e_11;
     }

     public function setA5e11(?string $A5e_11): static
     {
         $this->A5e_11 = $A5e_11;

         return $this;
     }

     public function getA5e12(): ?string
     {
         return $this->A5e_12;
     }

     public function setA5e12(?string $A5e_12): static
     {
         $this->A5e_12 = $A5e_12;

         return $this;
     }

     public function getA5e13(): ?string
     {
         return $this->A5e_13;
     }

     public function setA5e13(?string $A5e_13): static
     {
         $this->A5e_13 = $A5e_13;

         return $this;
     }

     public function getA5e14(): ?string
     {
         return $this->A5e_14;
     }

     public function setA5e14(?string $A5e_14): static
     {
         $this->A5e_14 = $A5e_14;

         return $this;
     }

     public function getA5f1(): ?string
     {
         return $this->A5f_1;
     }

     public function setA5f1(?string $A5f_1): static
     {
         $this->A5f_1 = $A5f_1;

         return $this;
     }

     public function getA5f2(): ?string
     {
         return $this->A5f_2;
     }

     public function setA5f2(?string $A5f_2): static
     {
         $this->A5f_2 = $A5f_2;

         return $this;
     }

     public function getA5f3(): ?string
     {
         return $this->A5f_3;
     }

     public function setA5f3(?string $A5f_3): static
     {
         $this->A5f_3 = $A5f_3;

         return $this;
     }

     public function getA5f4(): ?string
     {
         return $this->A5f_4;
     }

     public function setA5f4(?string $A5f_4): static
     {
         $this->A5f_4 = $A5f_4;

         return $this;
     }

     public function getA5f5(): ?string
     {
         return $this->A5f_5;
     }

     public function setA5f5(?string $A5f_5): static
     {
         $this->A5f_5 = $A5f_5;

         return $this;
     }

     public function getA5f6(): ?string
     {
         return $this->A5f_6;
     }

     public function setA5f6(?string $A5f_6): static
     {
         $this->A5f_6 = $A5f_6;

         return $this;
     }

     public function getA5f7(): ?string
     {
         return $this->A5f_7;
     }

     public function setA5f7(?string $A5f_7): static
     {
         $this->A5f_7 = $A5f_7;

         return $this;
     }

     public function getA5f8(): ?string
     {
         return $this->A5f_8;
     }

     public function setA5f8(?string $A5f_8): static
     {
         $this->A5f_8 = $A5f_8;

         return $this;
     }

     public function getA5f9(): ?string
     {
         return $this->A5f_9;
     }

     public function setA5f9(?string $A5f_9): static
     {
         $this->A5f_9 = $A5f_9;

         return $this;
     }

     public function getA5f10(): ?string
     {
         return $this->A5f_10;
     }

     public function setA5f10(string $A5f_10): static
     {
         $this->A5f_10 = $A5f_10;

         return $this;
     }

     public function getA5f11(): ?string
     {
         return $this->A5f_11;
     }

     public function setA5f11(?string $A5f_11): static
     {
         $this->A5f_11 = $A5f_11;

         return $this;
     }

     public function getA5f12(): ?string
     {
         return $this->A5f_12;
     }

     public function setA5f12(?string $A5f_12): static
     {
         $this->A5f_12 = $A5f_12;

         return $this;
     }

     public function getA5f13(): ?string
     {
         return $this->A5f_13;
     }

     public function setA5f13(?string $A5f_13): static
     {
         $this->A5f_13 = $A5f_13;

         return $this;
     }

     public function getA5f14(): ?string
     {
         return $this->A5f_14;
     }

     public function setA5f14(?string $A5f_14): static
     {
         $this->A5f_14 = $A5f_14;

         return $this;
     }

     public function getStatutFiche(): ?int
     {
         return $this->StatutFiche;
     }

     public function setStatutFiche(?int $StatutFiche): static
     {
         $this->StatutFiche = $StatutFiche;

         return $this;
     }
}
