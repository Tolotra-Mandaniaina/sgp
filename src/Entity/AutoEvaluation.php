<?php

namespace App\Entity;

use App\Repository\AutoEvaluationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AutoEvaluationRepository::class)]
class AutoEvaluation
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

    #[ORM\Column(name:"A1",length: 255, nullable: true)]
    private ?string $A1 = null;

    #[ORM\Column(name:"A10",length: 255, nullable: true)]
    private ?string $A10 = null;

    #[ORM\Column(name:"A34",length: 20, nullable: true)]
    private ?string $A34 = null;

    #[ORM\Column(name:"A35",length: 255, nullable: true)]
    private ?string $A35 = null;

    #[ORM\Column(name:"A36",type: Types::TEXT, nullable: true)]
    private ?string $A36 = null;

    #[ORM\Column(name:"A37",type: Types::TEXT, nullable: true)]
    private ?string $A37 = null;

    #[ORM\Column(name:"A38",length: 20, nullable: true)]
    private ?string $A38 = null;

    #[ORM\Column(name:"A39",length: 12, nullable: true)]
    private ?string $A39 = null;

    #[ORM\Column(name:"B1",type: Types::TEXT, nullable: true)]
    private ?string $B1 = null;

    #[ORM\Column(name:"B2",length: 255, nullable: true)]
    private ?string $B2 = null;

    #[ORM\Column(name:"B3",type: Types::TEXT, nullable: true)]
    private ?string $B3 = null;

    #[ORM\Column(name:"B4",type: Types::TEXT, nullable: true)]
    private ?string $B4 = null;

    #[ORM\Column(name:"B5",type: Types::TEXT, nullable: true)]
    private ?string $B5 = null;

    #[ORM\Column(name:"B6",type: Types::TEXT, nullable: true)]
    private ?string $B6 = null;

    #[ORM\Column(name:"B7",type: Types::TEXT, nullable: true)]
    private ?string $B7 = null;

    #[ORM\Column(name:"B8",type: Types::TEXT, nullable: true)]
    private ?string $B8 = null;

    #[ORM\Column(name:"B9",type: Types::TEXT, nullable: true)]
    private ?string $B9 = null;

    #[ORM\Column(name:"B10",type: Types::TEXT, nullable: true)]
    private ?string $B10 = null;

    #[ORM\Column(name:"B11",type: Types::TEXT, nullable: true)]
    private ?string $B11 = null;

    #[ORM\Column(name:"B12",type: Types::TEXT, nullable: true)]
    private ?string $B12 = null;

    #[ORM\Column(name:"B13",type: Types::TEXT, nullable: true)]
    private ?string $B13 = null;

    #[ORM\Column(name:"B14",type: Types::TEXT, nullable: true)]
    private ?string $B14 = null;

    #[ORM\Column(name:"B15",type: Types::TEXT, nullable: true)]
    private ?string $B15 = null;

    #[ORM\Column(name:"B16",type: Types::TEXT, nullable: true)]
    private ?string $B16 = null;

    #[ORM\Column(name:"B17",type: Types::TEXT, nullable: true)]
    private ?string $B17 = null;

    #[ORM\Column(name:"B18",type: Types::TEXT, nullable: true)]
    private ?string $B18 = null;

    #[ORM\Column(name:"B19",type: Types::TEXT, nullable: true)]
    private ?string $B19 = null;

    #[ORM\Column(name:"B20",type: Types::TEXT, nullable: true)]
    private ?string $B20 = null;

    #[ORM\Column(name:"B21",type: Types::TEXT, nullable: true)]
    private ?string $B21 = null;

    #[ORM\Column(name:"B22",type: Types::TEXT, nullable: true)]
    private ?string $B22 = null;

    #[ORM\Column(name:"B23",type: Types::TEXT, nullable: true)]
    private ?string $B23 = null;

    #[ORM\Column(name:"B24",type: Types::TEXT, nullable: true)]
    private ?string $B24 = null;

    #[ORM\Column(name:"B25",type: Types::TEXT, nullable: true)]
    private ?string $B25 = null;

    #[ORM\Column(name:"B26", type: Types::TEXT, nullable: true)]
    private ?string $B26 = null;

    #[ORM\Column(name:"B27",type: Types::TEXT, nullable: true)]
    private ?string $B27 = null;

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

    public function getA10(): ?string
    {
        return $this->A10;
    }

    public function setA10(?string $A10): static
    {
        $this->A10 = $A10;

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
        return $this->A35;
    }

    public function setA35(?string $A35): static
    {
        $this->A35 = $A35;

        return $this;
    }

    public function getA36(): ?string
    {
        return $this->A36;
    }

    public function setA36(?string $A36): static
    {
        $this->A36 = $A36;

        return $this;
    }

    public function getA37(): ?string
    {
        return $this->A37;
    }

    public function setA37(?string $A37): static
    {
        $this->A37 = $A37;

        return $this;
    }

    public function getA38(): ?string
    {
        return $this->A38;
    }

    public function setA38(string $A38): static
    {
        $this->A38 = $A38;

        return $this;
    }

    public function getA39(): ?string
    {
        return $this->A39;
    }

    public function setA39(?string $A39): static
    {
        $this->A39 = $A39;

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

    public function getB2(): ?string
    {
        return $this->B2;
    }

    public function setB2(?string $B2): static
    {
        $this->B2 = $B2;

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

    public function getB4(): ?string
    {
        return $this->B4;
    }

    public function setB4(?string $B4): static
    {
        $this->B4 = $B4;

        return $this;
    }

    public function getB5(): ?string
    {
        return $this->B5;
    }

    public function setB5(?string $B5): static
    {
        $this->B5 = $B5;

        return $this;
    }

    public function getB6(): ?string
    {
        return $this->B6;
    }

    public function setB6(?string $B6): static
    {
        $this->B6 = $B6;

        return $this;
    }

    public function getB7(): ?string
    {
        return $this->B7;
    }

    public function setB7(?string $B7): static
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

    public function getB9(): ?string
    {
        return $this->B9;
    }

    public function setB9(?string $B9): static
    {
        $this->B9 = $B9;

        return $this;
    }

    public function getB10(): ?string
    {
        return $this->B10;
    }

    public function setB10(?string $B10): static
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

    public function getB12(): ?string
    {
        return $this->B12;
    }

    public function setB12(?string $B12): static
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

    public function getB16(): ?string
    {
        return $this->B16;
    }

    public function setB16(?string $B16): static
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

    public function getB20(): ?string
    {
        return $this->B20;
    }

    public function setB20(?string $B20): static
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

    public function getB24(): ?string
    {
        return $this->B24;
    }

    public function setB24(?string $B24): static
    {
        $this->B24 = $B24;

        return $this;
    }

    public function getB25(): ?string
    {
        return $this->B25;
    }

    public function setB25(?string $B25): static
    {
        $this->B25 = $B25;

        return $this;
    }

    public function getB26(): ?string
    {
        return $this->B26;
    }

    public function setB26(?string $B26): static
    {
        $this->B26 = $B26;

        return $this;
    }

    public function getB27(): ?string
    {
        return $this->B27;
    }

    public function setB27(?string $B27): static
    {
        $this->B27 = $B27;

        return $this;
    }
}
