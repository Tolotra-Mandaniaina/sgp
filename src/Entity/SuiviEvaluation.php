<?php

namespace App\Entity;

use App\Repository\SuiviEvaluationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SuiviEvaluationRepository::class)]
class SuiviEvaluation
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

    #[ORM\Column(name:"A5",length: 50, nullable: true)]
    private ?string $A5 = null;

    #[ORM\Column(name:"A6",length: 50, nullable: true)]
    private ?string $A6 = null;

    #[ORM\Column(name:"A7",length: 50, nullable: true)]
    private ?string $A7 = null;

    #[ORM\Column(name:"A8",length: 50, nullable: true)]
    private ?string $A8 = null;

    #[ORM\Column(name:"A9",length: 12, nullable: true)]
    private ?string $A9 = null;

    #[ORM\Column(name:"A10",length: 50, nullable: true)]
    private ?string $A10 = null;

    #[ORM\Column(name:"A11",length: 15, nullable: true)]
    private ?string $A11 = null;

    #[ORM\Column(name:"A12",length: 10, nullable: true)]
    private ?string $A12 = null;

    #[ORM\Column(name:"A13",length: 15, nullable: true)]
    private ?string $A13 = null;

    #[ORM\Column(name:"A14",length: 15, nullable: true)]
    private ?string $A14 = null;

    #[ORM\Column(name:"A15",length: 12, nullable: true)]
    private ?string $A15 = null;

    #[ORM\Column(name:"A16",length: 50, nullable: true)]
    private ?string $A16 = null;

    #[ORM\Column(name:"A17",length: 12, nullable: true)]
    private ?string $A17 = null;

    #[ORM\Column(name:"A18", nullable: true)]
    private ?int $A18 = null;

    #[ORM\Column(name:"A19",length: 255, nullable: true)]
    private ?string $A19 = null;

    #[ORM\Column(name:"A20",length: 255, nullable: true)]
    private ?string $A20 = null;

    #[ORM\Column(name:"A21",length: 10, nullable: true)]
    private ?string $A21 = null;

    #[ORM\Column(name:"A22",length: 255, nullable: true)]
    private ?string $A22 = null;

    #[ORM\Column(name:"A23",length: 12, nullable: true)]
    private ?string $A23 = null;

    #[ORM\Column(name:"A24", nullable: true)]
    private ?int $A24 = null;

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

    #[ORM\Column(name:"B1", nullable: true)]
    private ?int $B1 = null;

    #[ORM\Column(name:"B2", nullable: true)]
    private ?int $B2 = null;

    #[ORM\Column(name:"B3", nullable: true)]
    private ?int $B3 = null;

    #[ORM\Column(name:"B4",nullable: true)]
    private ?int $B4 = null;

    #[ORM\Column(name:"B5", nullable: true)]
    private ?int $B5 = null;

    #[ORM\Column(name:"B6", nullable: true)]
    private ?int $B6 = null;

    #[ORM\Column(name:"B7", nullable: true)]
    private ?int $B7 = null;

    #[ORM\Column(name:"B8",length: 10, nullable: true)]
    private ?string $B8 = null;

    #[ORM\Column(name:"B9", nullable: true)]
    private ?int $B9 = null;

    #[ORM\Column(name:"B10", nullable: true)]
    private ?int $B10 = null;

    #[ORM\Column(name:"B11",length: 10, nullable: true)]
    private ?string $B11 = null;

    #[ORM\Column(name:"B12", nullable: true)]
    private ?int $B12 = null;

    #[ORM\Column(name:"B13",length: 10, nullable: true)]
    private ?string $B13 = null;

    #[ORM\Column(name:"B14",type: "text", nullable: true)]
    private ?string $B14 = null;

    #[ORM\Column(name:"B15",length: 10, nullable: true)]
    private ?string $B15 = null;

    #[ORM\Column(name:"B16", nullable: true)]
    private ?int $B16 = null;

    #[ORM\Column(name:"B17",length: 10, nullable: true)]
    private ?string $B17 = null;

    #[ORM\Column(name:"B18",length: 255, nullable: true)]
    private ?string $B18 = null;

    #[ORM\Column(name:"B19",length: 10, nullable: true)]
    private ?string $B19 = null;

    #[ORM\Column(name:"B20", nullable: true)]
    private ?int $B20 = null;

    #[ORM\Column(name:"B21",length: 255, nullable: true)]
    private ?string $B21 = null;

    #[ORM\Column(name:"B22",length: 10, nullable: true)]
    private ?string $B22 = null;

    #[ORM\Column(name:"B23",length: 255, nullable: true)]
    private ?string $B23 = null;

    #[ORM\Column(name:"C1",  nullable: true)]
    private ?int $C1 = null;

    #[ORM\Column(name:"C2", nullable: true)]
    private ?int $C2 = null;

    #[ORM\Column(name:"C3", nullable: true)]
    private ?int $C3 = null;

    #[ORM\Column(name:"C3a",type: "text", nullable: true)]
    private ?string $C3a = null;

    #[ORM\Column(name:"C3b",type: "text", nullable: true)]
    private ?string $C3b = null;

    #[ORM\Column(name:"C3c",type: "text", nullable: true)]
    private ?string $C3c = null;

    #[ORM\Column(name:"C3d",type: "text", nullable: true)]
    private ?string $C3d = null;

    #[ORM\Column(name:"C4", nullable: true)]
    private ?int $C4 = null;

    #[ORM\Column(name:"C5", nullable: true)]
    private ?int $C5 = null;

    #[ORM\Column(name:"C6", nullable: true)]
    private ?int $C6 = null;

    #[ORM\Column(name:"D1",  nullable: true)]
    private ?int $D1 = null;

    #[ORM\Column(name:"D2",nullable: true)]
    private ?int $D2 = null;

    #[ORM\Column(name:"D3", nullable: true)]
    private ?int $D3 = null;

    #[ORM\Column(name:"D4", nullable: true)]
    private ?int $D4 = null;

    #[ORM\Column(name:"E1", nullable: true)]
    private ?int $E1 = null;

    #[ORM\Column(name:"E2", nullable: true)]
    private ?int $E2 = null;

    #[ORM\Column(name:"E3", nullable: true)]
    private ?int $E3 = null;

    #[ORM\Column(name:"F1",  nullable: true)]
    private ?int $F1 = null;

    #[ORM\Column(name:"F2", nullable: true)]
    private ?int $F2 = null;

    #[ORM\Column(name:"F3", nullable: true)]
    private ?int $F3 = null;

    #[ORM\Column(name:"F4",nullable: true)]
    private ?int $F4 = null;

    #[ORM\Column(name:"F5", nullable: true)]
    private ?int $F5 = null;

    #[ORM\Column(name:"G1",  nullable: true)]
    private ?int $G1 = null;

    #[ORM\Column(name:"G2", nullable: true)]
    private ?int $G2 = null;

    #[ORM\Column(name:"G3", nullable: true)]
    private ?int $G3 = null;

    #[ORM\Column(name:"G4", nullable: true)]
    private ?int $G4 = null;

    #[ORM\Column(name:"G5", nullable: true)]
    private ?int $G5 = null;

    #[ORM\Column(name:"G6", nullable: true)]
    private ?int  $G6 = null;

    #[ORM\Column(name:"H1", nullable: true)]
    private ?int $H1 = null;

    #[ORM\Column(name:"H2", nullable: true)]
    private ?int $H2 = null;

    #[ORM\Column(name:"H3",length: 255, nullable: true)]
    private ?string $H3 = null;

    #[ORM\Column(name:"H4", nullable: true)]
    private ?int $H4 = null;

    #[ORM\Column(name:"H5",type: "text", nullable: true)]
    private ?string $H5 = null;

    #[ORM\Column(name:"H6", nullable: true)]
    private ?int $H6 = null;

    #[ORM\Column(name:"H7",type: "text", nullable: true)]
    private ?text $H7 = null;

    #[ORM\Column(name:"H8",length: 50, nullable: true)]
    private ?string $H8 = null;

    #[ORM\Column(name:"H9", nullable: true)]
    private ?int $H9 = null;

    #[ORM\Column(name:"H10",type: "text", nullable: true)]
    private ?string $H10 = null;

    #[ORM\Column(name:"H11",length: 10, nullable: true)]
    private ?string $H11 = null;

    #[ORM\Column(name:"H12",length: 255, nullable: true)]
    private ?string $H12 = null;

    #[ORM\Column(name:"H13",type: "text", nullable: true)]
    private ?string $H13 = null;

    #[ORM\Column(name:"H14",length: 50, nullable: true)]
    private ?string $H14 = null;

    #[ORM\Column(name:"H15",nullable: true)]
    private ?int $H15 = null;

    #[ORM\Column(name:"H16", nullable: true)]
    private ?int $H16 = null;

    #[ORM\Column(name:"H17",nullable: true)]
    private ?int $H17 = null;

    #[ORM\Column(name:"H18", nullable: true)]
    private ?int $H18 = null;

    #[ORM\Column(name:"H19",length: 255, nullable: true)]
    private ?string $H19 = null;

    #[ORM\Column(name:"H20",length: 255, nullable: true)]
    private ?string $H20 = null;

    #[ORM\Column(name:"H21",length: 255, nullable: true)]
    private ?string $H21 = null;

    #[ORM\Column(name:"H22", nullable: true)]
    private ?int $H22 = null;

    #[ORM\Column(name:"H23",length: 10, nullable: true)]
    private ?string $H23 = null;

    #[ORM\Column(name:"H24",length: 10, nullable: true)]
    private ?string $H24 = null;

    #[ORM\Column(name:"H25",length: 10, nullable: true)]
    private ?string $H25 = null;

    #[ORM\Column(name:"H26",length: 10, nullable: true)]
    private ?string $H26 = null;

    #[ORM\Column(name:"H27",length: 10, nullable: true)]
    private ?string $H27 = null;

    #[ORM\Column(name:"H28",length: 10, nullable: true)]
    private ?string $H28 = null;

    #[ORM\Column(name:"I1", length: 10, nullable: true)]
    private ?string $I1 = null;

    #[ORM\Column(name:"I2", nullable: true)]
    private ?int $I2 = null;

    #[ORM\Column(name:"I3", nullable: true)]
    private ?int $I3 = null;

    #[ORM\Column(name:"I4",length: 10, nullable: true)]
    private ?string $I4 = null;

    #[ORM\Column(name:"I5",type: "text", nullable: true)]
    private ?string $I5 = null;

    #[ORM\Column(name:"I6", nullable: true)]
    private ?int $I6 = null;

    #[ORM\Column(name:"I7",length: 10, nullable: true)]
    private ?string $I7 = null;

    #[ORM\Column(name:"I8",length: 10, nullable: true)]
    private ?string $I8 = null;

    #[ORM\Column(name:"I9",length: 10, nullable: true)]
    private ?string $I9 = null;

    #[ORM\Column(name:"I10",length: 10, nullable: true)]
    private ?string $I10 = null;

    #[ORM\Column(name:"I11",length: 10, nullable: true)]
    private ?string $I11 = null;

    #[ORM\Column(name:"I12",length: 10, nullable: true)]
    private ?string $I12 = null;

    #[ORM\Column(name:"J1", length: 10, nullable: true)]
    private ?string $J1 = null;

    #[ORM\Column(name:"J2", nullable: true)]
    private ?int $J2 = null;

    #[ORM\Column(name:"J3",length: 255, nullable: true)]
    private ?string $J3 = null;

    #[ORM\Column(name:"J4",length: 10, nullable: true)]
    private ?string $J4 = null;

    #[ORM\Column(name:"J5", nullable: true)]
    private ?int $J5 = null;

    #[ORM\Column(name:"J6", nullable: true)]
    private ?int $J6 = null;

    #[ORM\Column(name:"J7",length: 10, nullable: true)]
    private ?string $J7 = null;

    #[ORM\Column(name:"J8",type: "text", nullable: true)]
    private ?string $J8 = null;

    #[ORM\Column(name:"J9",length: 10, nullable: true)]
    private ?string $J9 = null;

    #[ORM\Column(name:"J10", nullable: true)]
    private ?int $J10 = null;

    #[ORM\Column(name:"J11",length: 255, nullable: true)]
    private ?string $J11 = null;

    #[ORM\Column(name:"J12",length: 10, nullable: true)]
    private ?string $J12 = null;

    #[ORM\Column(name:"J13",length: 10, nullable: true)]
    private ?string $J13 = null;

    #[ORM\Column(name:"J14",type: "text", nullable: true)]
    private ?text $J14 = null;

    #[ORM\Column(name:"J15",length: 10, nullable: true)]
    private ?string $J15 = null;

    #[ORM\Column(name:"J16", nullable: true)]
    private ?int $J16 = null;

    #[ORM\Column(name:"J17",length: 255, nullable: true)]
    private ?string $J17 = null;

    #[ORM\Column(name:"J18", nullable: true)]
    private ?int $J18 = null;

    #[ORM\Column(name:"J19",length: 10, nullable: true)]
    private ?string $J19 = null;

    #[ORM\Column(name:"J20",nullable: true)]
    private ?int $J20 = null;

    #[ORM\Column(name:"J21",length: 10, nullable: true)]
    private ?string $J21 = null;

    #[ORM\Column(name:"J22", nullable: true)]
    private ?int $J22 = null;

    #[ORM\Column(name:"K1", nullable: true)]
    private ?int $K1 = null;

    #[ORM\Column(name:"K2", nullable: true)]
    private ?int $K2 = null;

    #[ORM\Column(name:"K3", nullable: true)]
    private ?int $K3 = null;

    #[ORM\Column(name:"K4", nullable: true)]
    private ?int $K4 = null;

    #[ORM\Column(name:"K5", nullable: true)]
    private ?int $K5 = null;

    #[ORM\Column(name:"K6", nullable: true)]
    private ?int $K6 = null;

    #[ORM\Column(name:"K7",length: 10, nullable: true)]
    private ?string $K7 = null;

    #[ORM\Column(name:"K8", nullable: true)]
    private ?int $K8 = null;

     #[ORM\Column(name:"K8a", nullable: true)]
    private ?int $K8a = null;

     #[ORM\Column(name:"K8b", nullable: true)]
    private ?int $K8b = null;


    #[ORM\Column(name:"K9", nullable: true)]
    private ?int $K9 = null;

    #[ORM\Column(name:"K10",length: 10, nullable: true)]
    private ?string $K10 = null;

    #[ORM\Column(name:"K11", nullable: true)]
    private ?int $K11 = null;

    #[ORM\Column(name:"K12",length: 10, nullable: true)]
    private ?string $K12 = null;

    #[ORM\Column(name:"K13",type:"text", nullable: true)]
    private ?string $K13 = null;

    #[ORM\Column(name:"K14",length: 10, nullable: true)]
    private ?string $K14 = null;

    #[ORM\Column(name:"K15",length: 10, nullable: true)]
    private ?string $K15 = null;

    #[ORM\Column(name:"K16",length: 10, nullable: true)]
    private ?string $K16 = null;

    #[ORM\Column(name:"K17", nullable: true)]
    private ?int $K17 = null;

    #[ORM\Column(name:"K18", nullable: true)]
    private ?int $K18 = null;

    #[ORM\Column(name:"K19",length: 10, nullable: true)]
    private ?string $K19 = null;

    #[ORM\Column(name:"K20",type: "text", nullable: true)]
    private ?string $K20 = null;

    #[ORM\Column(name:"K21",length: 10, nullable: true)]
    private ?string $K21 = null;

    #[ORM\Column(name:"K22", nullable: true)]
    private ?int $K22 = null;

    #[ORM\Column(name:"K23", nullable: true)]
    private ?int $K23 = null;

    #[ORM\Column(name:"K24",length: 10, nullable: true)]
    private ?string $K24 = null;

    #[ORM\Column(name:"K25", nullable: true)]
    private ?int $K25 = null;

    #[ORM\Column(name:"K26",length: 10, nullable: true)]
    private ?string $K26 = null;

    #[ORM\Column(name:"K27",nullable: true)]
    private ?int $K27 = null;



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

    public function getA18(): ?int
    {
        return $this->A18;
    }

    public function setA18(?int $A18): static
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

    public function getA24(): ?int
    {
        return $this->A24;
    }

    public function setA24(?int $A24): static
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

    public function getB1(): ?int
    {
        return $this->B1;
    }

    public function setB1(?int $B1): static
    {
        $this->B1 = $B1;

        return $this;
    }

    public function getB2(): ?int
    {
        return $this->B2;
    }

    public function setB2(?int $B2): static
    {
        $this->B2 = $B2;

        return $this;
    }

    public function getB3(): ?int
    {
        return $this->B3;
    }

    public function setB3(?int $B3): static
    {
        $this->B3 = $B3;

        return $this;
    }

    public function getB4(): ?int
    {
        return $this->B4;
    }

    public function setB4(?int $B4): static
    {
        $this->B4 = $B4;

        return $this;
    }

    public function getB5(): ?int
    {
        return $this->B5;
    }

    public function setB5(?int $B5): static
    {
        $this->B5 = $B5;

        return $this;
    }

    public function getB6(): ?int
    {
        return $this->B6;
    }

    public function setB6(?int $B6): static
    {
        $this->B6 = $B6;

        return $this;
    }

    public function getB7(): ?int
    {
        return $this->B7;
    }

    public function setB7(?int $B7): static
    {
        $this->B7 = $B7;

        return $this;
    }

    public function getB8(): ?string
    {
        return $this->B8;
    }

    public function setB8(?string $B8): static
    {
        $this->B8 = $B8;

        return $this;
    }

    public function getB9(): ?int
    {
        return $this->B9;
    }

    public function setB9(?int $B9): static
    {
        $this->B9 = $B9;

        return $this;
    }

    public function getB10(): ?int
    {
        return $this->B10;
    }

    public function setB10(?int $B10): static
    {
        $this->B10 = $B10;

        return $this;
    }

    public function getB11(): ?string
    {
        return $this->B11;
    }

    public function setB11(?string $B11): static
    {
        $this->B11 = $B11;

        return $this;
    }

    public function getB12(): ?int
    {
        return $this->B12;
    }

    public function setB12(?int $B12): static
    {
        $this->B12 = $B12;

        return $this;
    }

    public function getB13(): ?string
    {
        return $this->B13;
    }

    public function setB13(?string $B13): static
    {
        $this->B13 = $B13;

        return $this;
    }

    public function getB14(): ?string
    {
        return $this->B14;
    }

    public function setB14(?string $B14): static
    {
        $this->B14 = $B14;

        return $this;
    }

    public function getB15(): ?string
    {
        return $this->B15;
    }

    public function setB15(?string $B15): static
    {
        $this->B15 = $B15;

        return $this;
    }

    public function getB16(): ?int
    {
        return $this->B16;
    }

    public function setB16(?int $B16): static
    {
        $this->B16 = $B16;

        return $this;
    }

    public function getB17(): ?string
    {
        return $this->B17;
    }

    public function setB17(?string $B17): static
    {
        $this->B17 = $B17;

        return $this;
    }

    public function getB18(): ?string
    {
        return $this->B18;
    }

    public function setB18(?string $B18): static
    {
        $this->B18 = $B18;

        return $this;
    }

    public function getB19(): ?string
    {
        return $this->B19;
    }

    public function setB19(?string $B19): static
    {
        $this->B19 = $B19;

        return $this;
    }
   
    public function getB20(): ?int
    {
        return $this->B20;
    }

    public function setB20(?int $B20): static
    {
        $this->B20 = $B20;

        return $this;
    }

    public function getB21(): ?string
    {
        return $this->B21;
    }

    public function setB21(?string $B21): static
    {
        $this->B21 = $B21;

        return $this;
    }

    public function getB22(): ?string
    {
        return $this->B22;
    }

    public function setB22(?string $B22): static
    {
        $this->B22 = $B22;

        return $this;
    }

    public function getB23(): ?string
    {
        return $this->B23;
    }

    public function setB23(?string $B23): static
    {
        $this->B23 = $B23;

        return $this;
    }
    public function getC1(): ?int
    {
        return $this->C1;
    }

    public function setC1(?int $C1): static
    {
        $this->C1 = $C1;

        return $this;
    }

    public function getC2(): ?int
    {
        return $this->C2;
    }

    public function setC2(?int $C2): static
    {
        $this->C2 = $C2;

        return $this;
    }

    public function getC3(): ?int
    {
        return $this->C3;
    }

    public function setC3(?int $C3): static
    {
        $this->C3 = $C3;

        return $this;
    }
    public function getC3a(): ?string
    {
        return $this->C3a;
    }

    public function setC3a(?string $C3a): static
    {
        $this->C3a = $C3a;

        return $this;
    }
    public function getC3b(): ?string
    {
        return $this->C3b;
    }

    public function setC3b(?string $C3b): static
    {
        $this->C3b = $C3b;

        return $this;
    }
    public function getC3c(): ?string
    {
        return $this->C3c;
    }

    public function setC3c(?string $C3c): static
    {
        $this->C3c = $C3c;

        return $this;
    }
    public function getC3d(): ?string
    {
        return $this->C3d;
    }

    public function setC3d(?string $C3d): static
    {
        $this->C3d = $C3d;

        return $this;
    }

    public function getC4(): ?int
    {
        return $this->C4;
    }

    public function setC4(?int $C4): static
    {
        $this->C4 = $C4;

        return $this;
    }

    public function getC5(): ?int
    {
        return $this->C5;
    }

    public function setC5(?int $C5): static
    {
        $this->C5 = $C5;

        return $this;
    }

    public function getC6(): ?int
    {
        return $this->C6;
    }

    public function setC6(?int $C6): static
    {
        $this->C6 = $C6;

        return $this;
    }
    public function getD1(): ?int
    {
        return $this->D1;
    }

    public function setD1(?int $D1): static
    {
        $this->D1 = $D1;

        return $this;
    }

    public function getD2(): ?int
    {
        return $this->D2;
    }

    public function setD2(?int $D2): static
    {
        $this->D2 = $D2;

        return $this;
    }

    public function getD3(): ?int
    {
        return $this->D3;
    }

    public function setD3(?int $D3): static
    {
        $this->D3 = $D3;

        return $this;
    }
    

    public function getD4(): ?int
    {
        return $this->D4;
    }

    public function setD4(?int $D4): static
    {
        $this->D4 = $D4;

        return $this;
    }
    public function getE1(): ?int
    {
        return $this->E1;
    }

    public function setE1(?int $E1): static
    {
        $this->E1 = $E1;

        return $this;
    }

    public function getE2(): ?int
    {
        return $this->E2;
    }

    public function setE2(?int $E2): static
    {
        $this->E2 = $E2;

        return $this;
    }

    public function getE3(): ?int
    {
        return $this->E3;
    }

    public function setE3(?int $E3): static
    {
        $this->E3 = $E3;

        return $this;
    }
    public function getF1(): ?int
    {
        return $this->F1;
    }

    public function setF1(?int $F1): static
    {
        $this->F1 = $F1;

        return $this;
    }

    public function getF2(): ?int
    {
        return $this->F2;
    }

    public function setF2(?int $F2): static
    {
        $this->F2 = $F2;

        return $this;
    }

    public function getF3(): ?int
    {
        return $this->F3;
    }

    public function setF3(?int $F3): static
    {
        $this->F3 = $F3;

        return $this;
    }

    public function getF4(): ?int
    {
        return $this->F4;
    }

    public function setF4(?int $F4): static
    {
        $this->F4 = $F4;

        return $this;
    }

    public function getF5(): ?int
    {
        return $this->F5;
    }

    public function setF5(?int $F5): static
    {
        $this->F5 = $F5;

        return $this;
    }
    public function getG1(): ?int
    {
        return $this->G1;
    }

    public function setG1(?int $G1): static
    {
        $this->G1 = $G1;

        return $this;
    }

    public function getG2(): ?int
    {
        return $this->G2;
    }

    public function setG2(?int $G2): static
    {
        $this->G2 = $G2;

        return $this;
    }

    public function getG3(): ?int
    {
        return $this->G3;
    }

    public function setG3(?int $G3): static
    {
        $this->G3 = $G3;

        return $this;
    }

    public function getG4(): ?int
    {
        return $this->G4;
    }

    public function setG4(?int $G4): static
    {
        $this->G4 = $G4;

        return $this;
    }

    public function getG5(): ?int
    {
        return $this->G5;
    }

    public function setG5(?int $G5): static
    {
        $this->G5 = $G5;

        return $this;
    }
      public function getG6(): ?int
    {
        return $this->G6;
    }

    public function setG6(?int $G6): static
    {
        $this->G6 = $G6;

        return $this;
    }
    public function getH1(): ?int
    {
        return $this->H1;
    }

    public function setH1(?int $H1): static
    {
        $this->H1 = $H1;

        return $this;
    }

    public function getH2(): ?int
    {
        return $this->H2;
    }

    public function setH2(?int $H2): static
    {
        $this->H2 = $H2;

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

    public function getH4(): ?int
    {
        return $this->H4;
    }

    public function setH4(?int $H4): static
    {
        $this->H4 = $H4;

        return $this;
    }

    public function getH5(): ?string
    {
        return $this->H5;
    }

    public function setH5(?string $H5): static
    {
        $this->H5 = $H5;

        return $this;
    }

    public function getH6(): ?int
    {
        return $this->H6;
    }

    public function setH6(?int $H6): static
    {
        $this->H6 = $H6;

        return $this;
    }

    public function getH7(): ?string
    {
        return $this->H7;
    }

    public function setH7(?string $H7): static
    {
        $this->H7 = $H7;

        return $this;
    }

    public function getH8(): ?string
    {
        return $this->H8;
    }

    public function setH8(?string $H8): static
    {
        $this->H8 = $H8;

        return $this;
    }

    public function getH9(): ?int
    {
        return $this->H9;
    }

    public function setH9(?int $H9): static
    {
        $this->H9 = $H9;

        return $this;
    }

    public function getH10(): ?string
    {
        return $this->H10;
    }

    public function setH10(?string $H10): static
    {
        $this->H10 = $H10;

        return $this;
    }

    public function getH11(): ?string
    {
        return $this->H11;
    }

    public function setH11(?string $H11): static
    {
        $this->H11 = $H11;

        return $this;
    }

    public function getH12(): ?int
    {
        return $this->H12;
    }

    public function setH12(?int $H12): static
    {
        $this->H12 = $H12;

        return $this;
    }

    public function getH13(): ?string
    {
        return $this->H13;
    }

    public function setH13(?string $H13): static
    {
        $this->H13 = $H13;

        return $this;
    }

    public function getH14(): ?string
    {
        return $this->H14;
    }

    public function setH14(?string $H14): static
    {
        $this->H14 = $H14;

        return $this;
    }

    public function getH15(): ?int
    {
        return $this->H15;
    }

    public function setH15(?int $H15): static
    {
        $this->H15 = $H15;

        return $this;
    }

    public function getH16(): ?int
    {
        return $this->H16;
    }

    public function setH16(?int $H16): static
    {
        $this->H16 = $H16;

        return $this;
    }

    public function getH17(): ?int
    {
        return $this->H17;
    }

    public function setH17(?int $H17): static
    {
        $this->H17 = $H17;

        return $this;
    }

    public function getH18(): ?int
    {
        return $this->H18;
    }

    public function setH18(?int $H18): static
    {
        $this->H18 = $H18;

        return $this;
    }

    public function getH19(): ?string
    {
        return $this->H19;
    }

    public function setH19(?string $H19): static
    {
        $this->H19 = $H19;

        return $this;
    }
   
    public function getH20(): ?string
    {
        return $this->H20;
    }

    public function setH20(?string $H20): static
    {
        $this->H20 = $H20;

        return $this;
    }

    public function getH21(): ?string
    {
        return $this->H21;
    }

    public function setH21(?string $H21): static
    {
        $this->H21 = $H21;

        return $this;
    }

    public function getH22(): ?int
    {
        return $this->H22;
    }

    public function setH22(?int $H22): static
    {
        $this->H22 = $H22;

        return $this;
    }

    public function getH23(): ?string
    {
        return $this->H23;
    }

    public function setH23(?string $H23): static
    {
        $this->H23 = $H23;

        return $this;
    }

    public function getH24(): ?string
    {
        return $this->H24;
    }

    public function setH24(?string $H24): static
    {
        $this->H24 = $H24;

        return $this;
    }

    public function getH25(): ?string
    {
        return $this->H25;
    }

    public function setH25(?string $H25): static
    {
        $this->H25 = $H25;

        return $this;
    }

    public function getH26(): ?string
    {
        return $this->H26;
    }

    public function setH26(?string $H26): static
    {
        $this->H26 = $H26;

        return $this;
    }

    public function getH27(): ?string
    {
        return $this->H27;
    }

    public function setH27(?string $H27): static
    {
        $this->H27 = $H27;

        return $this;
    }

    public function getH28(): ?string
    {
        return $this->H28;
    }

    public function setH28(?string $H28): static
    {
        $this->H28 = $H28;

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

    public function getI2(): ?int
    {
        return $this->I2;
    }

    public function setI2(?int $I2): static
    {
        $this->I2 = $I2;

        return $this;
    }

    public function getI3(): ?int
    {
        return $this->I3;
    }

    public function setI3(?int $I3): static
    {
        $this->I3 = $I3;

        return $this;
    }

    public function getI4(): ?string
    {
        return $this->I4;
    }

    public function setI4(?string $I4): static
    {
        $this->I4 = $I4;

        return $this;
    }

    public function getI5(): ?string
    {
        return $this->I5;
    }

    public function setI5(?string $I5): static
    {
        $this->I5 = $I5;

        return $this;
    }

    public function getI6(): ?int
    {
        return $this->I6;
    }

    public function setI6(?int $I6): static
    {
        $this->I6 = $I6;

        return $this;
    }

    public function getI7(): ?string
    {
        return $this->I7;
    }

    public function setI7(?string $I7): static
    {
        $this->I7 = $I7;

        return $this;
    }

    public function getI8(): ?string
    {
        return $this->I8;
    }

    public function setI8(?string $I8): static
    {
        $this->I8 = $I8;

        return $this;
    }

    public function getI9(): ?string
    {
        return $this->I9;
    }

    public function setI9(?string $I9): static
    {
        $this->I9 = $I9;

        return $this;
    }

    public function getI10(): ?string
    {
        return $this->I10;
    }

    public function setI10(?string $I10): static
    {
        $this->I10 = $I10;

        return $this;
    }

    public function getI11(): ?string
    {
        return $this->I11;
    }

    public function setI11(?string $I11): static
    {
        $this->I11 = $I11;

        return $this;
    }

    public function getI12(): ?string
    {
        return $this->I12;
    }

    public function setI12(?string $I12): static
    {
        $this->I12 = $I12;

        return $this;
    }
    public function getJ1(): ?string
    {
        return $this->J1;
    }

    public function setJ1(?string $J1): static
    {
        $this->J1 = $J1;

        return $this;
    }

    public function getJ2(): ?int
    {
        return $this->J2;
    }

    public function setJ2(?int $J2): static
    {
        $this->J2 = $J2;

        return $this;
    }

    public function getJ3(): ?string
    {
        return $this->J3;
    }

    public function setJ3(?string $J3): static
    {
        $this->J3 = $J3;

        return $this;
    }

    public function getJ4(): ?string
    {
        return $this->J4;
    }

    public function setJ4(?string $J4): static
    {
        $this->J4 = $J4;

        return $this;
    }

    public function getJ5(): ?int
    {
        return $this->J5;
    }

    public function setJ5(?int $J5): static
    {
        $this->J5 = $J5;

        return $this;
    }

    public function getJ6(): ?int
    {
        return $this->J6;
    }

    public function setJ6(?int $J6): static
    {
        $this->J6 = $J6;

        return $this;
    }

    public function getJ7(): ?string
    {
        return $this->J7;
    }

    public function setJ7(?string $J7): static
    {
        $this->J7 = $J7;

        return $this;
    }

    public function getJ8(): ?string
    {
        return $this->J8;
    }

    public function setJ8(?string $J8): static
    {
        $this->J8 = $J8;

        return $this;
    }

    public function getJ9(): ?string
    {
        return $this->J9;
    }

    public function setJ9(?string $J9): static
    {
        $this->J9 = $J9;

        return $this;
    }

    public function getJ10(): ?int
    {
        return $this->J10;
    }

    public function setJ10(?int $J10): static
    {
        $this->J10 = $J10;

        return $this;
    }

    public function getJ11(): ?string
    {
        return $this->J11;
    }

    public function setJ11(?string $J11): static
    {
        $this->J11 = $J11;

        return $this;
    }

    public function getJ12(): ?string
    {
        return $this->J12;
    }

    public function setJ12(?string $J12): static
    {
        $this->J12 = $J12;

        return $this;
    }

    public function getJ13(): ?string
    {
        return $this->J13;
    }

    public function setJ13(?string $J13): static
    {
        $this->J13 = $J13;

        return $this;
    }

    public function getJ14(): ?string
    {
        return $this->J14;
    }

    public function setJ14(?string $J14): static
    {
        $this->J14 = $J14;

        return $this;
    }

    public function getJ15(): ?string
    {
        return $this->J15;
    }

    public function setJ15(?string $J15): static
    {
        $this->J15 = $J15;

        return $this;
    }

    public function getJ16(): ?int
    {
        return $this->J16;
    }

    public function setJ16(?int $J16): static
    {
        $this->J16 = $J16;

        return $this;
    }

    public function getJ17(): ?int
    {
        return $this->J17;
    }

    public function setJ17(?int $J17): static
    {
        $this->J17 = $J17;

        return $this;
    }

    public function getJ18(): ?int
    {
        return $this->J18;
    }

    public function setJ18(?int $J18): static
    {
        $this->J18 = $J18;

        return $this;
    }

    public function getJ19(): ?string
    {
        return $this->J19;
    }

    public function setJ19(?string $J19): static
    {
        $this->J19 = $J19;

        return $this;
    }
   
    public function getJ20(): ?int
    {
        return $this->J20;
    }

    public function setJ20(?int $J20): static
    {
        $this->J20 = $J20;

        return $this;
    }

    public function getJ21(): ?string
    {
        return $this->J21;
    }

    public function setJ21(?string $J21): static
    {
        $this->J21 = $J21;

        return $this;
    }

    public function getJ22(): ?int
    {
        return $this->J22;
    }

    public function setJ22(?int $J22): static
    {
        $this->J22 = $J22;

        return $this;
    }
    public function getK1(): ?int
    {
        return $this->K1;
    }

    public function setK1(?int $K1): static
    {
        $this->K1 = $K1;

        return $this;
    }

    public function getK2(): ?int
    {
        return $this->K2;
    }

    public function setK2(?int $K2): static
    {
        $this->K2 = $K2;

        return $this;
    }

    public function getK3(): ?int
    {
        return $this->K3;
    }

    public function setK3(?int $K3): static
    {
        $this->K3 = $K3;

        return $this;
    }

    public function getK4(): ?int
    {
        return $this->K4;
    }

    public function setK4(?int $K4): static
    {
        $this->K4 = $K4;

        return $this;
    }

    public function getK5(): ?int
    {
        return $this->K5;
    }

    public function setK5(?int $K5): static
    {
        $this->K5 = $K5;

        return $this;
    }

    public function getK6(): ?int
    {
        return $this->K6;
    }

    public function setK6(?int $K6): static
    {
        $this->K6 = $K6;

        return $this;
    }

    public function getK7(): ?string
    {
        return $this->K7;
    }

    public function setK7(?string $K7): static
    {
        $this->K7 = $K7;

        return $this;
    }

    public function getK8(): ?int
    {
        return $this->K8;
    }

    public function setK8(?int $K8): static
    {
        $this->K8 = $K8;

        return $this;
    }
    public function getK8a(): ?int
    {
        return $this->K8a;
    }

    public function setK8a(?int $K8a): static
    {
        $this->K8a = $K8a;

        return $this;
    }
    public function getK8b(): ?int
    {
        return $this->K8b;
    }

    public function setK8b(?int $K8b): static
    {
        $this->K8b = $K8b;

        return $this;
    }

    public function getK9(): ?int
    {
        return $this->K9;
    }

    public function setK9(?int $K9): static
    {
        $this->K9 = $K9;

        return $this;
    }

    public function getK10(): ?string
    {
        return $this->K10;
    }

    public function setK10(?string $K10): static
    {
        $this->K10 = $K10;

        return $this;
    }

    public function getK11(): ?int
    {
        return $this->K11;
    }

    public function setK11(?int $K11): static
    {
        $this->K11 = $K11;

        return $this;
    }

    public function getK12(): ?string
    {
        return $this->K12;
    }

    public function setK12(?string $K12): static
    {
        $this->K12 = $K12;

        return $this;
    }

    public function getK13(): ?string
    {
        return $this->K13;
    }

    public function setK13(?string $K13): static
    {
        $this->K13 = $K13;

        return $this;
    }

    public function getK14(): ?string
    {
        return $this->K14;
    }

    public function setK14(?string $K14): static
    {
        $this->K14 = $K14;

        return $this;
    }

    public function getK15(): ?string
    {
        return $this->K15;
    }

    public function setK15(?string $K15): static
    {
        $this->K15 = $K15;

        return $this;
    }

    public function getK16(): ?string
    {
        return $this->K16;
    }

    public function setK16(?string $K16): static
    {
        $this->K16 = $K16;

        return $this;
    }

    public function getK17(): ?int
    {
        return $this->K17;
    }

    public function setK17(?int $K17): static
    {
        $this->K17 = $K17;

        return $this;
    }

    public function getK18(): ?int
    {
        return $this->K18;
    }

    public function setK18(?int $K18): static
    {
        $this->K18 = $K18;

        return $this;
    }

    public function getK19(): ?string
    {
        return $this->K19;
    }

    public function setK19(?string $K19): static
    {
        $this->K19 = $K19;

        return $this;
    }
   
    public function getK20(): ?int
    {
        return $this->K20;
    }

    public function setK20(?int $K20): static
    {
        $this->K20 = $K20;

        return $this;
    }

    public function getK21(): ?string
    {
        return $this->K21;
    }

    public function setK21(?string $K21): static
    {
        $this->K21 = $K21;

        return $this;
    }

    public function getK22(): ?int
    {
        return $this->K22;
    }

    public function setK22(?int $K22): static
    {
        $this->K22 = $K22;

        return $this;
    }

    public function getK23(): ?int
    {
        return $this->K23;
    }

    public function setK23(?int $K23): static
    {
        $this->K23 = $K23;

        return $this;
    }

    public function getK24(): ?string
    {
        return $this->K24;
    }

    public function setK24(?string $K24): static
    {
        $this->K24 = $K24;

        return $this;
    }

    public function getK25(): ?int
    {
        return $this->K25;
    }

    public function setK25(?int $K25): static
    {
        $this->K25 = $K25;

        return $this;
    }

    public function getK26(): ?string
    {
        return $this->K26;
    }

    public function setK26(?string $K26): static
    {
        $this->K26 = $K26;

        return $this;
    }

    public function getK27(): ?int
    {
        return $this->K27;
    }

    public function setK27(?int $K27): static
    {
        $this->K27 = $K27;

        return $this;
    }


    

    

   
   
}


