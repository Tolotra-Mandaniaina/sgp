<?php

namespace App\Entity;

use App\Repository\ConceptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConceptionRepository::class)]
class Conception
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

    #[ORM\Column(name:"A1",length: 20, nullable: true)]
    private ?string $A1 = null;

    #[ORM\Column(name:"A2",length: 12, nullable: true)]
    private ?string $A2 = null;

    #[ORM\Column(name:"A3",length: 15, nullable: true)]
    private ?string $A3 = null;

    #[ORM\Column(name:"A4",length: 255, nullable: true)]
    private ?string $A4 = null;

    #[ORM\Column(name:"A5",length: 255, nullable: true)]
    private ?string $A5 = null;

    #[ORM\Column(name:"A6",length: 255, nullable: true)]
    private ?string $A6 = null;

    #[ORM\Column(name:"A7",length: 255, nullable: true)]
    private ?string $A7 = null;

    #[ORM\Column(name:"B1",length: 12, nullable: true)]
    private ?string $B1 = null;

    #[ORM\Column(name:"B1a",type: Types::TEXT, nullable: true)]
    private ?string $B1a = null;

    #[ORM\Column(name:"B1b",length: 50, nullable: true)]
    private ?string $B1b = null;

    #[ORM\Column(name:"B2",length: 12, nullable: true)]
    private ?string $B2 = null;

    #[ORM\Column(name:"B2a",type: Types::TEXT, nullable: true)]
    private ?string $B2a = null;

    #[ORM\Column(name:"B2b",length: 50, nullable: true)]
    private ?string $B2b = null;

    #[ORM\Column(name:"B3",length: 255, nullable: true)]
    private ?string $B3 = null;

    #[ORM\Column(name:"B3a",type: Types::TEXT, nullable: true)]
    private ?string $B3a = null;

    #[ORM\Column(name:"B3b",length: 50, nullable: true)]
    private ?string $B3b = null;

    #[ORM\Column(name:"C1",length: 12, nullable: true)]
    private ?string $C1 = null;

    #[ORM\Column(name:"C1a",type: Types::TEXT, nullable: true)]
    private ?string $C1a = null;

    #[ORM\Column(name:"C1b",type: Types::TEXT, nullable: true)]
    private ?string $C1b = null;

    #[ORM\Column(name:"C1c",length: 50, nullable: true)]
    private ?string $C1c = null;

    #[ORM\Column(name:"C2",length: 12, nullable: true)]
    private ?string $C2 = null;

    #[ORM\Column(name:"C2a",length: 255, nullable: true)]
    private ?string $C2a = null;

    #[ORM\Column(name:"C2b",length: 50, nullable: true)]
    private ?string $C2b = null;

    #[ORM\Column(name:"D1",length: 12, nullable: true)]
    private ?string $D1 = null;

    #[ORM\Column(name:"D1a",type: Types::TEXT, nullable: true)]
    private ?string $D1a = null;

    #[ORM\Column(name:"D1b",length: 50, nullable: true)]
    private ?string $D1b = null;

    #[ORM\Column(name:"D2",length: 12, nullable: true)]
    private ?string $D2 = null;

    #[ORM\Column(name:"D2a",type: Types::TEXT, nullable: true)]
    private ?string $D2a = null;

    #[ORM\Column(name:"D2b",length: 50, nullable: true)]
    private ?string $D2b = null;

    #[ORM\Column(name:"D3",length: 12, nullable: true)]
    private ?string $D3 = null;

    #[ORM\Column(name:"D3a",type: Types::TEXT, nullable: true)]
    private ?string $D3a = null;

    #[ORM\Column(name:"D3b",length: 50, nullable: true)]
    private ?string $D3b = null;

    #[ORM\Column(name:"D4",length: 12, nullable: true)]
    private ?string $D4 = null;

    #[ORM\Column(name:"D4a",type: Types::TEXT, nullable: true)]
    private ?string $D4a = null;

    #[ORM\Column(name:"D4b",length: 50, nullable: true)]
    private ?string $D4b = null;

    #[ORM\Column(name:"D5",length: 12, nullable: true)]
    private ?string $D5 = null;

    #[ORM\Column(name:"D5a",type: Types::TEXT, nullable: true)]
    private ?string $D5a = null;

    #[ORM\Column(name:"D5b",length: 50, nullable: true)]
    private ?string $D5b = null;

    #[ORM\Column(name:"D6",length: 12, nullable: true)]
    private ?string $D6 = null;

    #[ORM\Column(name:"D6a",length: 255, nullable: true)]
    private ?string $D6a = null;

    #[ORM\Column(name:"D6b",length: 50, nullable: true)]
    private ?string $D6b = null;

    #[ORM\Column(name:"E1",length: 255, nullable: true)]
    private ?string $E1 = null;

    #[ORM\Column(name:"E1a",type: Types::TEXT, nullable: true)]
    private ?string $E1a = null;

    #[ORM\Column(name:"E1b",length: 50, nullable: true)]
    private ?string $E1b = null;

    #[ORM\Column(name:"E2",length: 12, nullable: true)]
    private ?string $E2 = null;

    #[ORM\Column(name:"E2a",type: Types::TEXT, nullable: true)]
    private ?string $E2a = null;

    #[ORM\Column(name:"E2b",length: 50, nullable: true)]
    private ?string $E2b = null;

    #[ORM\Column(name:"E3",length: 50, nullable: true)]
    private ?string $E3 = null;

    #[ORM\Column(name:"E3a",length: 255, nullable: true)]
    private ?string $E3a = null;

    #[ORM\Column(name:"E3b",length: 255, nullable: true)]
    private ?string $E3b = null;

    #[ORM\Column(name:"E4",length: 12, nullable: true)]
    private ?string $E4 = null;

    #[ORM\Column(name:"E4a",type: Types::TEXT, nullable: true)]
    private ?string $E4a = null;

    #[ORM\Column(name:"E4b",length: 50, nullable: true)]
    private ?string $E4b = null;

    #[ORM\Column(name:"F1",length: 12, nullable: true)]
    private ?string $F1 = null;

    #[ORM\Column(name:"F1a",type: Types::TEXT, nullable: true)]
    private ?string $F1a = null;

    #[ORM\Column(name:"F1b",length: 50, nullable: true)]
    private ?string $F1b = null;

    #[ORM\Column(name:"F2",length: 12, nullable: true)]
    private ?string $F2 = null;

    #[ORM\Column(name:"F2a",type: Types::TEXT, nullable: true)]
    private ?string $F2a = null;

    #[ORM\Column(name:"F2b",length: 50, nullable: true)]
    private ?string $F2b = null;

    #[ORM\Column(name:"F3",length: 12, nullable: true)]
    private ?string $F3 = null;

    #[ORM\Column(name:"F3a",type: Types::TEXT, nullable: true)]
    private ?string $F3a = null;

    #[ORM\Column(name:"F3b",length: 50, nullable: true)]
    private ?string $F3b = null;

    #[ORM\Column(name:"F4",length: 12, nullable: true)]
    private ?string $F4 = null;

    #[ORM\Column(name:"F4a",type: Types::TEXT, nullable: true)]
    private ?string $F4a = null;

    #[ORM\Column(name:"F4b",length: 50, nullable: true)]
    private ?string $F4b = null;

    #[ORM\Column(name:"F5",length: 12, nullable: true)]
    private ?string $F5 = null;

    #[ORM\Column(name:"F5a",type: Types::TEXT, nullable: true)]
    private ?string $F5a = null;

    #[ORM\Column(name:"F5b",length: 50, nullable: true)]
    private ?string $F5b = null;

    #[ORM\Column(name:"F6",length: 12, nullable: true)]
    private ?string $F6 = null;

    #[ORM\Column(name:"F6a",type: Types::TEXT, nullable: true)]
    private ?string $F6a = null;

    #[ORM\Column(name:"F6b",length: 50, nullable: true)]
    private ?string $F6b = null;

    #[ORM\Column(name:"G1",length: 12, nullable: true)]
    private ?string $G1 = null;

    #[ORM\Column(name:"G1a",type: Types::TEXT, nullable: true)]
    private ?string $G1a = null;

    #[ORM\Column(name:"G1b",length: 50, nullable: true)]
    private ?string $G1b = null;

    #[ORM\Column(name:"G2",length: 12, nullable: true)]
    private ?string $G2 = null;

    #[ORM\Column(name:"G2a",type: Types::TEXT, nullable: true)]
    private ?string $G2a = null;

    #[ORM\Column(name:"G2b",length: 50, nullable: true)]
    private ?string $G2b = null;

    #[ORM\Column(name:"H1",length: 12, nullable: true)]
    private ?string $H1 = null;

    #[ORM\Column(name:"H1a",type: Types::TEXT, nullable: true)]
    private ?string $H1a = null;

    #[ORM\Column(name:"H1b",length: 50, nullable: true)]
    private ?string $H1b = null;

    #[ORM\Column(name:"H2",length: 12, nullable: true)]
    private ?string $H2 = null;

    #[ORM\Column(name:"H2a",type: Types::TEXT, nullable: true)]
    private ?string $H2a = null;

    #[ORM\Column(name:"H2b",length: 50, nullable: true)]
    private ?string $H2b = null;

    #[ORM\Column(name:"H3",length: 12, nullable: true)]
    private ?string $H3 = null;

    #[ORM\Column(name:"H3a",type: Types::TEXT, nullable: true)]
    private ?string $H3a = null;

    #[ORM\Column(name:"H3b",length: 50, nullable: true)]
    private ?string $H3b = null;

    #[ORM\Column(name:"I1",length: 12, nullable: true)]
    private ?string $I1 = null;

    #[ORM\Column(name:"I1a",type: Types::TEXT, nullable: true)]
    private ?string $I1a = null;

    #[ORM\Column(name:"I1b",length: 50, nullable: true)]
    private ?string $I1b = null;

    #[ORM\Column(name:"I2",length: 12, nullable: true)]
    private ?string $I2 = null;

    #[ORM\Column(name:"I2a",type: Types::TEXT, nullable: true)]
    private ?string $I2a = null;

    #[ORM\Column(name:"I2b",length: 50, nullable: true)]
    private ?string $I2b = null;

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

    public function setA3(string $A3): static
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

    public function getA6(): ?string
    {
        return $this->A6;
    }

    public function setA6(?string $A6): static
    {
        $this->A6 = $A6;

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

    public function getB1(): ?string
    {
        return $this->B1;
    }

    public function setB1(?string $B1): static
    {
        $this->B1 = $B1;

        return $this;
    }

    public function getB1a(): ?string
    {
        return $this->B1a;
    }

    public function setB1a(?string $B1a): static
    {
        $this->B1a = $B1a;

        return $this;
    }

    public function getB1b(): ?string
    {
        return $this->B1b;
       
    }

    public function setB1b(?string $B1b): static
    {
        $this->B1b = $B1b;

        return $this;
    }

    public function getB2(): ?string
    {
        return $this->B2;
    }

    public function setB2(?string $B2): static
    {
        $this->B2 = $B2;

        return $this;
    }

    public function getB2a(): ?string
    {
        return $this->B2a;
    }

    public function setB2a(?string $B2a): static
    {
        $this->B2a = $B2a;

        return $this;
    }

    public function getB2b(): ?string
    {
        return $this->B2b;
       
    }

    public function setB2b(?string $B2b): static
    {
        $this->B2b = $B2b;

        return $this;
    }

    public function getB3(): ?string
    {
        return $this->B3;
    }

    public function setB3(?string $B3): static
    {
        $this->B3 = $B3;

        return $this;
    }

    public function getB3a(): ?string
    {
        return $this->B3a;
    }

    public function setB3a(?string $B3a): static
    {
        $this->B3a = $B3a;

        return $this;
    }

    public function getB3b(): ?string
    {
        return $this->B3b;
       
    }

    public function setB3b(?string $B3b): static
    {
        $this->B3b = $B3b;

        return $this;
    }

    public function getC1(): ?string
    {
        return $this->C1;
    }

    public function setC1(?string $C1): static
    {
        $this->C1 = $C1;

        return $this;
    }

    public function getC1a(): ?string
    {
        return $this->C1a;
    }

    public function setC1a(?string $C1a): static
    {
        $this->C1a = $C1a;

        return $this;
    }

    public function getC1b(): ?string
    {
        return $this->C1b;
    }

    public function setC1b(?string $C1b): static
    {
        $this->C1b = $C1b;

        return $this;
    }

    public function getC1c(): ?string
    {
        return $this->C1c;
       
    }

    public function setC1c(?string $C1c): static
    {
        $this->C1c = $C1c;

        return $this;
    }

    public function getC2(): ?string
    {
        return $this->C2;
    }

    public function setC2(?string $C2): static
    {
        $this->C2 = $C2;

        return $this;
    }

    public function getC2a(): ?string
    {
        return $this->C2a;
    }

    public function setC2a(?string $C2a): static
    {
        $this->C2a = $C2a;

        return $this;
    }

    public function getC2b(): ?string
    {
        return $this->C2b;
           }

    public function setC2b(?string $C2b): static
    {
        $this->C2b = $C2b;

        return $this;
    }

    public function getD1(): ?string
    {
        return $this->D1;
    }

    public function setD1(?string $D1): static
    {
        $this->D1 = $D1;

        return $this;
    }

    public function getD1a(): ?string
    {
        return $this->D1a;
    }

    public function setD1a(?string $D1a): static
    {
        $this->D1a = $D1a;

        return $this;
    }

    public function getD1b(): ?string
    {
        return $this->D1b;
       
    }

    public function setD1b(?string $D1b): static
    {
        $this->D1b = $D1b;

        return $this;
    }

    public function getD2(): ?string
    {
        return $this->D2;
    }

    public function setD2(?string $D2): static
    {
        $this->D2 = $D2;

        return $this;
    }

    public function getD2a(): ?string
    {
        return $this->D2a;
    }

    public function setD2a(?string $D2a): static
    {
        $this->D2a = $D2a;

        return $this;
    }

    public function getD2b(): ?string
    {
        return $this->D2b;
       
    }

    public function setD2b(?string $D2b): static
    {
        $this->D2b = $D2b;

        return $this;
    }

    public function getD3(): ?string
    {
        return $this->D3;
    }

    public function setD3(?string $D3): static
    {
        $this->D3 = $D3;

        return $this;
    }

    public function getD3a(): ?string
    {
        return $this->D3a;
    }

    public function setD3a(?string $D3a): static
    {
        $this->D3a = $D3a;

        return $this;
    }

    public function getD3b(): ?string
    {
        return $this->D3b;
       
    }

    public function setD3b(?string $D3b): static
    {
        $this->D3b = $D3b;

        return $this;
    }

    public function getD4(): ?string
    {
        return $this->D4;
    }

    public function setD4(?string $D4): static
    {
        $this->D4 = $D4;

        return $this;
    }

    public function getD4a(): ?string
    {
        return $this->D4a;
    }

    public function setD4a(?string $D4a): static
    {
        $this->D4a = $D4a;

        return $this;
    }

    public function getD4b(): ?string
    {
        return $this->D4b;
       
    }

    public function setD4b(?string $D4b): static
    {
        $this->D4b = $D4b;

        return $this;
    }

    public function getD5(): ?string
    {
        return $this->D5;
    }

    public function setD5(?string $D5): static
    {
        $this->D5 = $D5;

        return $this;
    }

    public function getD5a(): ?string
    {
        return $this->D5a;
    }

    public function setD5a(?string $D5a): static
    {
        $this->D5a = $D5a;

        return $this;
    }

    public function getD5b(): ?string
    {
        return $this->D5b;
       
    }

    public function setD5b(?string $D5b): static
    {
        $this->D5b = $D5b;

        return $this;
    }

    public function getD6(): ?string
    {
        return $this->D6;
    }

    public function setD6(?string $D6): static
    {
        $this->D6 = $D6;

        return $this;
    }

    public function getD6a(): ?string
    {
        return $this->D6a;
    }

    public function setD6a(?string $D6a): static
    {
        $this->D6a = $D6a;

        return $this;
    }

    public function getD6b(): ?string
    {
        return $this->D6b;
       
    }

    public function setD6b(?string $D6b): static
    {
        $this->D6b = $D6b;

        return $this;
    }

    public function getE1(): ?string
    {
        return $this->E1;
    }

    public function setE1(?string $E1): static
    {
        $this->E1 = $E1;

        return $this;
    }

    public function getE1a(): ?string
    {
        return $this->E1a;
    }

    public function setE1a(?string $E1a): static
    {
        $this->E1a = $E1a;

        return $this;
    }

    public function getE1b(): ?string
    {
        return $this->E1b;
       
    }

    public function setE1b(?string $E1b): static
    {
        $this->E1b = $E1b;

        return $this;
    }

    public function getE2(): ?string
    {
        return $this->E2;
    }

    public function setE2(?string $E2): static
    {
        $this->E2 = $E2;

        return $this;
    }

    public function getE2a(): ?string
    {
        return $this->E2a;
    }

    public function setE2a(?string $E2a): static
    {
        $this->E2a = $E2a;

        return $this;
    }

    public function getE2b(): ?string
    {
        return $this->E2b;
       
    }

    public function setE2b(?string $E2b): static
    {
        $this->E2b = $E2b;

        return $this;
    }

    public function getE3(): ?string
    {
        return $this->E3;
    }

    public function setE3(?string $E3): static
    {
        $this->E3 = $E3;

        return $this;
    }

    public function getE3a(): ?string
    {
        return $this->E3a;
    }

    public function setE3a(?string $E3a): static
    {
        $this->E3a = $E3a;

        return $this;
    }

    public function getE3b(): ?string
    {
        return $this->E3b;
       
    }

    public function setE3b(?string $E3b): static
    {
        $this->E3b = $E3b;

        return $this;
    }

    public function getE4(): ?string
    {
        return $this->E4;
    }

    public function setE4(?string $E4): static
    {
        $this->E4 = $E4;

        return $this;
    }

    public function getE4a(): ?string
    {
        return $this->E4a;
    }

    public function setE4a(?string $E4a): static
    {
        $this->E4a = $E4a;

        return $this;
    }

    public function getE4b(): ?string
    {
        return $this->E4b;
       
    }

    public function setE4b(?string $E4b): static
    {
        $this->E4b = $E4b;

        return $this;
    }

    public function getF1(): ?string
    {
        return $this->F1;
    }

    public function setF1(?string $F1): static
    {
        $this->F1 = $F1;

        return $this;
    }

    public function getF1a(): ?string
    {
        return $this->F1a;
    }

    public function setF1a(?string $F1a): static
    {
        $this->F1a = $F1a;

        return $this;
    }

    public function getF1b(): ?string
    {
        return $this->F1b;
       
    }

    public function setF1b(?string $F1b): static
    {
        $this->F1b = $F1b;

        return $this;
    }

    public function getF2(): ?string
    {
        return $this->F2;
    }

    public function setF2(?string $F2): static
    {
        $this->F2 = $F2;

        return $this;
    }

    public function getF2a(): ?string
    {
        return $this->F2a;
    }

    public function setF2a(?string $F2a): static
    {
        $this->F2a = $F2a;

        return $this;
    }

    public function getF2b(): ?string
    {
        return $this->F2b;
       
    }

    public function setF2b(?string $F2b): static
    {
        $this->F2b = $F2b;

        return $this;
    }

    public function getF3(): ?string
    {
        return $this->F3;
    }

    public function setF3(?string $F3): static
    {
        $this->F3 = $F3;

        return $this;
    }

    public function getF3a(): ?string
    {
        return $this->F3a;
    }

    public function setF3a(?string $F3a): static
    {
        $this->F3a = $F3a;

        return $this;
    }

    public function getF3b(): ?string
    {
        return $this->F3b;
       
    }

    public function setF3b(?string $F3b): static
    {
        $this->F3b = $F3b;

        return $this;
    }

    public function getF4(): ?string
    {
        return $this->F4;
    }

    public function setF4(?string $F4): static
    {
        $this->F4 = $F4;

        return $this;
    }

    public function getF4a(): ?string
    {
        return $this->F4a;
    }

    public function setF4a(?string $F4a): static
    {
        $this->F4a = $F4a;

        return $this;
    }

    public function getF4b(): ?string
    {
        return $this->F4b;
       
    }

    public function setF4b(?string $F4b): static
    {
        $this->F4b = $F4b;

        return $this;
    }

    public function getF5(): ?string
    {
        return $this->F5;
    }

    public function setF5(?string $F5): static
    {
        $this->F5 = $F5;

        return $this;
    }

    public function getF5a(): ?string
    {
        return $this->F5a;
    }

    public function setF5a(?string $F5a): static
    {
        $this->F5a = $F5a;

        return $this;
    }

    public function getF5b(): ?string
    {
        return $this->F5b;
       
    }

    public function setF5b(?string $F5b): static
    {
        $this->F5b = $F5b;

        return $this;
    }

    public function getF6(): ?string
    {
        return $this->F6;
    }

    public function setF6(?string $F6): static
    {
        $this->F6 = $F6;

        return $this;
    }

    public function getF6a(): ?string
    {
        return $this->F6a;
    }

    public function setF6a(?string $F6a): static
    {
        $this->F6a = $F6a;

        return $this;
    }

    public function getF6b(): ?string
    {
        return $this->F6b;
       
    }

    public function setF6b(?string $F6b): static
    {
        $this->F6b = $F6b;

        return $this;
    }

    public function getG1(): ?string
    {
        return $this->G1;
    }

    public function setG1(?string $G1): static
    {
        $this->G1 = $G1;

        return $this;
    }

    public function getG1a(): ?string
    {
        return $this->G1a;
    }

    public function setG1a(?string $G1a): static
    {
        $this->G1a = $G1a;

        return $this;
    }

    public function getG1b(): ?string
    {
        return $this->G1b;
       
    }

    public function setG1b(?string $G1b): static
    {
        $this->G1b = $G1b;

        return $this;
    }

    public function getG2(): ?string
    {
        return $this->G2;
    }

    public function setG2(?string $G2): static
    {
        $this->G2 = $G2;

        return $this;
    }

    public function getG2a(): ?string
    {
        return $this->G2a;
    }

    public function setG2a(?string $G2a): static
    {
        $this->G2a = $G2a;

        return $this;
    }

    public function getG2b(): ?string
    {
        return $this->G2b;
       
    }

    public function setG2b(?string $G2b): static
    {
        $this->G2b = $G2b;

        return $this;
    }

    public function getH1(): ?string
    {
        return $this->H1;
    }

    public function setH1(?string $H1): static
    {
        $this->H1 = $H1;

        return $this;
    }

    public function getH1a(): ?string
    {
        return $this->H1a;
    }

    public function setH1a(?string $H1a): static
    {
        $this->H1a = $H1a;

        return $this;
    }

    public function getH1b(): ?string
    {
        return $this->H1b;
       
    }

    public function setH1b(?string $H1b): static
    {
        $this->H1b = $H1b;

        return $this;
    }

    public function getH2(): ?string
    {
        return $this->H2;
    }

    public function setH2(?string $H2): static
    {
        $this->H2 = $H2;

        return $this;
    }

    public function getH2a(): ?string
    {
        return $this->H2a;
    }

    public function setH2a(?string $H2a): static
    {
        $this->H2a = $H2a;

        return $this;
    }

    public function getH2b(): ?string
    {
        return $this->H2b;
       
    }

    public function setH2b(?string $H2b): static
    {
        $this->H2b = $H2b;

        return $this;
    }

    public function getH3(): ?string
    {
        return $this->H3;
    }

    public function setH3(?string $H3): static
    {
        $this->H3 = $H3;

        return $this;
    }

    public function getH3a(): ?string
    {
        return $this->H3a;
    }

    public function setH3a(?string $H3a): static
    {
        $this->H3a = $H3a;

        return $this;
    }

    public function getH3b(): ?string
    {
        return $this->H3b;
       
    }

    public function setH3b(?string $H3b): static
    {
        $this->H3b = $H3b;

        return $this;
    }

    public function getI1(): ?string
    {
        return $this->I1;
    }

    public function setI1(?string $I1): static
    {
        $this->I1 = $I1;

        return $this;
    }

    public function getI1a(): ?string
    {
        return $this->I1a;
    }

    public function setI1a(?string $I1a): static
    {
        $this->I1a = $I1a;

        return $this;
    }

    public function getI1b(): ?string
    {
        return $this->I1b;
       
    }

    public function setI1b(?string $I1b): static
    {
        $this->I1b = $I1b;

        return $this;
    }

    public function getI2(): ?string
    {
        return $this->I2;
    }

    public function setI2(?string $I2): static
    {
        $this->I2 = $I2;

        return $this;
    }

    public function getI2a(): ?string
    {
        return $this->I2a;
    }

    public function setI2a(?string $I2a): static
    {
        $this->I2a = $I2a;

        return $this;
    }

    public function getI2b(): ?string
    {
        return $this->I2b;
       
    }

    public function setI2b(?string $I2b): static
    {
        $this->I2b = $I2b;

        return $this;
    }
}
