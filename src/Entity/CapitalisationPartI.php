<?php

namespace App\Entity;

use App\Repository\CapitalisationPartIRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CapitalisationPartIRepository::class)]
class CapitalisationPartI
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

    #[ORM\Column(name:"A5", length: 100, nullable: true)]
    private ?string $A5 = null;

    #[ORM\Column(name:"A10", length: 255, nullable: true)]
    private ?string $A10 = null;

    #[ORM\Column(name:"A10a", length: 255, nullable: true)]
    private ?string $A10a = null;

    #[ORM\Column(name:"A11", length: 50, nullable: true)]
    private ?string $A11 = null;

    #[ORM\Column(name:"A12", length: 20, nullable: true)]
    private ?string $A12 = null;

    #[ORM\Column(name:"A13", length: 20, nullable: true)]
    private ?string $A13 = null;

    #[ORM\Column(name:"A19", length: 255, nullable: true)]
    private ?string $A19 = null;

    #[ORM\Column(name:"A33", length: 10, nullable: true)]
    private ?string $A33 = null;

    #[ORM\Column(name:"A34", length: 15, nullable: true)]
    private ?string $A34 = null;

    #[ORM\Column(name:"L1_1", length: 12, nullable: true)]
    private ?string $L1_1 = null;

    #[ORM\Column(name:"L1_2", length: 255, nullable: true)]
    private ?string $L1_2 = null;

    #[ORM\Column(name:"L1_3", length: 255, nullable: true)]
    private ?string $L1_3 = null;

    #[ORM\Column(name:"L1_4", length: 255, nullable: true)]
    private ?string $L1_4 = null;

    #[ORM\Column(name:"L1_5", length: 255, nullable: true)]
    private ?string $L1_5 = null;

    #[ORM\Column(name:"L1_6", length: 255, nullable: true)]
    private ?string $L1_6 = null;

    #[ORM\Column(name:"L1_7", length: 50, nullable: true)]
    private ?string $L1_7 = null;

    #[ORM\Column(name:"L1_8", length: 255, nullable: true)]
    private ?string $L1_8 = null;

    #[ORM\Column(name:"L1_9", length: 50, nullable: true)]
    private ?string $L1_9 = null;

    #[ORM\Column(name:"L1_9_autre", length: 255, nullable: true)]
    private ?string $L1_9_autre = null;

    #[ORM\Column(name:"L1_10", length: 255, nullable: true)]
    private ?string $L1_10 = null;

    #[ORM\Column(name:"L1_11", type: Types::TEXT, nullable: true)]
    private ?string $L1_11 = null;

    #[ORM\Column(name:"L1_11a", length: 15, nullable: true)]
    private ?string $L1_11a = null;

    #[ORM\Column(name:"L1_12", type: Types::TEXT, nullable: true)]
    private ?string $L1_12 = null;

    #[ORM\Column(name:"L1_13", length: 100, nullable: true)]
    private ?string $L1_13 = null;

    #[ORM\Column(name:"L1_14", type: Types::TEXT, nullable: true)]
    private ?string $L1_14 = null;

    #[ORM\Column(name:"L1_15", type: Types::TEXT, nullable: true)]
    private ?string $L1_15 = null;

    #[ORM\Column(name:"L1_16", type: Types::TEXT, nullable: true)]
    private ?string $L1_16 = null;

    #[ORM\Column(name:"L1_17", length: 50, nullable: true)]
    private ?string $L1_17 = null;

    #[ORM\Column(name:"L1_18", length: 255, nullable: true)]
    private ?string $L1_18 = null;

    #[ORM\Column(name:"L1_19", length: 255, nullable: true)]
    private ?string $L1_19 = null;

    #[ORM\Column(name:"L1_20", length: 15, nullable: true)]
    private ?string $L1_20 = null;

    #[ORM\Column(name:"L1_21", length: 100, nullable: true)]
    private ?string $L1_21 = null;

    #[ORM\Column(name:"L1_21_autre", type: Types::TEXT, nullable: true)]
    private ?string $L1_21_autre = null;

    #[ORM\Column(name:"L1_22", length: 50, nullable: true)]
    private ?string $L1_22 = null;

    #[ORM\Column(name:"L1_22_autre", type: Types::TEXT, nullable: true)]
    private ?string $L1_22_autre = null;

    #[ORM\Column(name:"L1_23", length: 15, nullable: true)]
    private ?string $L1_23 = null;

    #[ORM\Column(name:"L1_23_autre", type: Types::TEXT, nullable: true)]
    private ?string $L1_23_autre = null;

    #[ORM\Column(name:"L1_24", length: 15, nullable: true)]
    private ?string $L1_24 = null;

    #[ORM\Column(name:"L1_25a", type: Types::TEXT, nullable: true)]
    private ?string $L1_25a = null;

    #[ORM\Column(name:"L1_25b", type: Types::TEXT, nullable: true)]
    private ?string $L1_25b = null;

    #[ORM\Column(name:"L1_25c", type: Types::TEXT, nullable: true)]
    private ?string $L1_25c = null;

    #[ORM\Column(name:"L1_25d", type: Types::TEXT, nullable: true)]
    private ?string $L1_25d = null;

    #[ORM\Column(name:"L1_25e", type: Types::TEXT, nullable: true)]
    private ?string $L1_25e = null;

    #[ORM\Column(name:"L1_25f", type: Types::TEXT, nullable: true)]
    private ?string $L1_25f = null;

    #[ORM\Column(name:"L1_26a", type: Types::TEXT, nullable: true)]
    private ?string $L1_26a = null;

    #[ORM\Column(name:"L1_26b", type: Types::TEXT, nullable: true)]
    private ?string $L1_26b = null;

    #[ORM\Column(name:"L1_26c", type: Types::TEXT, nullable: true)]
    private ?string $L1_26c = null;

    #[ORM\Column(name:"L1_27", type: Types::TEXT, nullable: true)]
    private ?string $L1_27 = null;

    #[ORM\Column(name:"L1_28", length: 15, nullable: true)]
    private ?string $L1_28 = null;

    #[ORM\Column(name:"L1_29", length: 50, nullable: true)]
    private ?string $L1_29 = null;

    #[ORM\Column(name:"L1_30", length: 255, nullable: true)]
    private ?string $L1_30 = null;

    #[ORM\Column(name:"L1_31", length: 15, nullable: true)]
    private ?string $L1_31 = null;

    #[ORM\Column(name:"L1_32", type: Types::TEXT, nullable: true)]
    private ?string $L1_32 = null;

    #[ORM\Column(name:"L1_33", length: 15, nullable: true)]
    private ?string $L1_33 = null;

    #[ORM\Column(name:"L1_34", type: Types::TEXT, nullable: true)]
    private ?string $L1_34 = null;

    #[ORM\Column(name:"L1_35", type: Types::TEXT, nullable: true)]
    private ?string $L1_35 = null;

    #[ORM\Column(name:"L1_36", length: 100, nullable: true)]
    private ?string $L1_36 = null;

    #[ORM\Column(name:"L1_37", type: Types::TEXT, nullable: true)]
    private ?string $L1_37 = null;

    #[ORM\Column(name:"L1_38", type: Types::TEXT, nullable: true)]
    private ?string $L1_38 = null;

    #[ORM\Column(name:"L1_39", type: Types::TEXT, nullable: true)]
    private ?string $L1_39 = null;

    #[ORM\Column(name:"L1_40", length: 15, nullable: true)]
    private ?string $L1_40 = null;

    #[ORM\Column(name:"L1_41", type: Types::TEXT, nullable: true)]
    private ?string $L1_41 = null;

    #[ORM\Column(name:"L1_42", length: 255, nullable: true)]
    private ?string $L1_42 = null;

    #[ORM\Column(name:"L1_43", length: 15, nullable: true)]
    private ?string $L1_43 = null;

    #[ORM\Column(name:"L1_44", length: 15, nullable: true)]
    private ?string $L1_44 = null;

    #[ORM\Column(name:"L1_45", type: Types::TEXT, nullable: true)]
    private ?string $L1_45 = null;

    #[ORM\Column(name:"L1_46", length: 15, nullable: true)]
    private ?string $L1_46 = null;

    #[ORM\Column(name:"L1_47", length: 15, nullable: true)]
    private ?string $L1_47 = null;

    #[ORM\Column(name:"L1_48", type: Types::TEXT, nullable: true)]
    private ?string $L1_48 = null;

    #[ORM\Column(name:"L1_49", length: 255, nullable: true)]
    private ?string $L1_49 = null;

    #[ORM\Column(name:"L1_49_autre", type: Types::TEXT, nullable: true)]
    private ?string $L1_49_autre = null;

    #[ORM\Column(name:"L1_50", nullable: true)]
    private ?int $L1_50 = null;

    #[ORM\Column(name:"L1_51", type: Types::TEXT, nullable: true)]
    private ?string $L1_51 = null;

    #[ORM\Column(name:"L1_52", length: 255, nullable: true)]
    private ?string $L1_52 = null;

    #[ORM\Column(name:"L1_52_autre", type: Types::TEXT, nullable: true)]
    private ?string $L1_52_autre = null;

    #[ORM\Column(name:"L1_53", type: Types::TEXT, nullable: true)]
    private ?string $L1_53 = null;

    #[ORM\Column(name:"L1_54", type: Types::TEXT, nullable: true)]
    private ?string $L1_54 = null;

    #[ORM\Column(name:"L1_55", type: Types::TEXT, nullable: true)]
    private ?string $L1_55 = null;

    #[ORM\Column(name:"L1_56", type: Types::TEXT, nullable: true)]
    private ?string $L1_56 = null;

    #[ORM\Column(name:"L1_57", nullable: true)]
    private ?int $L1_57 = null;

    #[ORM\Column(name:"L1_58", nullable: true)]
    private ?int $L1_58 = null;

    #[ORM\Column(name:"L1_59", nullable: true)]
    private ?int $L1_59 = null;

    #[ORM\Column(name:"L1_60", nullable: true)]
    private ?int $L1_60 = null;

    #[ORM\Column(name:"L1_61", type: Types::TEXT, nullable: true)]
    private ?string $L1_61 = null;

    #[ORM\Column(name:"L1_85", type: Types::TEXT, nullable: true)]
    private ?string $L1_85 = null;

    #[ORM\Column(name:"L1_86", type: Types::TEXT, nullable: true)]
    private ?string $L1_86 = null;

    #[ORM\Column(name:"L1_87", type: Types::TEXT, nullable: true)]
    private ?string $L1_87 = null;

    #[ORM\Column(name:"L1_88", type: Types::TEXT, nullable: true)]
    private ?string $L1_88 = null;

    #[ORM\Column(name:"L1_89", type: Types::TEXT, nullable: true)]
    private ?string $L1_89 = null;

    #[ORM\Column(name:"L1_90", type: Types::TEXT, nullable: true)]
    private ?string $L1_90 = null;

    #[ORM\Column(name:"L1_91", type: Types::TEXT, nullable: true)]
    private ?string $L1_91 = null;

    #[ORM\Column(name:"L1_92", type: Types::TEXT, nullable: true)]
    private ?string $L1_92 = null;

    #[ORM\Column(name:"L1_93", type: Types::TEXT, nullable: true)]
    private ?string $L1_93 = null;

    #[ORM\Column(name:"L1_94", type: Types::TEXT, nullable: true)]
    private ?string $L1_94 = null;

    #[ORM\Column(name:"L1_95", type: Types::TEXT, nullable: true)]
    private ?string $L1_95 = null;

    #[ORM\Column(name:"L1_96", type: Types::TEXT, nullable: true)]
    private ?string $L1_96 = null;

    #[ORM\Column(name:"L1_98", type: Types::TEXT, nullable: true)]
    private ?string $L1_98 = null;

    #[ORM\Column(name:"L1_62", type: Types::TEXT, nullable: true)]
    private ?string $L1_62 = null;

    #[ORM\Column(name:"L1_63", type: Types::TEXT, nullable: true)]
    private ?string $L1_63 = null;

    #[ORM\Column(name:"L1_64", type: Types::TEXT, nullable: true)]
    private ?string $L1_64 = null;

    #[ORM\Column(name:"L1_65", type: Types::TEXT, nullable: true)]
    private ?string $L1_65 = null;

    #[ORM\Column(name:"L1_66", type: Types::TEXT, nullable: true)]
    private ?string $L1_66 = null;

    #[ORM\Column(name:"L1_67", type: Types::TEXT, nullable: true)]
    private ?string $L1_67 = null;

    #[ORM\Column(name:"L1_68", type: Types::TEXT, nullable: true)]
    private ?string $L1_68 = null;

    #[ORM\Column(name:"L1_68_autre", type: Types::TEXT, nullable: true)]
    private ?string $L1_68_autre = null;

    #[ORM\Column(name:"L1_69", type: Types::TEXT, nullable: true)]
    private ?string $L1_69 = null;

    #[ORM\Column(name:"L1_70", type: Types::TEXT, nullable: true)]
    private ?string $L1_70 = null;

    #[ORM\Column(name:"L1_71", type: Types::TEXT, nullable: true)]
    private ?string $L1_71 = null;

    #[ORM\Column(name:"L1_72", type: Types::TEXT, nullable: true)]
    private ?string $L1_72 = null;

    #[ORM\Column(name:"L1_73", type: Types::TEXT, nullable: true)]
    private ?string $L1_73 = null;

    #[ORM\Column(name:"L1_74", type: Types::TEXT, nullable: true)]
    private ?string $L1_74 = null;

    #[ORM\Column(name:"L1_75", type: Types::TEXT, nullable: true)]
    private ?string $L1_75 = null;

    #[ORM\Column(name:"L1_76", type: Types::TEXT, nullable: true)]
    private ?string $L1_76 = null;

    #[ORM\Column(name:"L1_77", type: Types::TEXT, nullable: true)]
    private ?string $L1_77 = null;

    #[ORM\Column(name:"L1_78", type: Types::TEXT, nullable: true)]
    private ?string $L1_78 = null;

    #[ORM\Column(name:"L1_79", type: Types::TEXT, nullable: true)]
    private ?string $L1_79 = null;

    #[ORM\Column(name:"L1_80", type: Types::TEXT, nullable: true)]
    private ?string $L1_80 = null;

    #[ORM\Column(name:"L1_81", type: Types::TEXT, nullable: true)]
    private ?string $L1_81 = null;

    #[ORM\Column(name:"L1_82", length: 255, nullable: true)]
    private ?string $L1_82 = null;

    #[ORM\Column(name:"L1_83", type: Types::TEXT, nullable: true)]
    private ?string $L1_83 = null;

    #[ORM\Column(name:"L1_84", type: Types::TEXT, nullable: true)]
    private ?string $L1_84 = null;

    #[ORM\Column(name:"L1_100", type: Types::TEXT, nullable: true)]
    private ?string $L1_100 = null;

    #[ORM\Column(name:"L2_1", type: Types::TEXT, nullable: true)]
    private ?string $L2_1 = null;

    #[ORM\Column(name:"L2_1_autre", type: Types::TEXT, nullable: true)]
    private ?string $L2_1_autre = null;

    #[ORM\Column(name:"L2_2", nullable: true)]
    private ?int $L2_2 = null;

    #[ORM\Column(name:"L2_3", type: Types::TEXT, nullable: true)]
    private ?string $L2_3 = null;

    #[ORM\Column(name:"L2_4", type: Types::TEXT, nullable: true)]
    private ?string $L2_4 = null;

    #[ORM\Column(name:"L2_16", type: Types::TEXT, nullable: true)]
    private ?string $L2_16 = null;

    #[ORM\Column(name:"L2_17a", type: Types::TEXT, nullable: true)]
    private ?string $L2_17a = null;

    #[ORM\Column(name:"L2_17b", type: Types::TEXT, nullable: true)]
    private ?string $L2_17b = null;

    #[ORM\Column(name:"L2_17c", type: Types::TEXT, nullable: true)]
    private ?string $L2_17c = null;

    #[ORM\Column(name:"L2_17d", type: Types::TEXT, nullable: true)]
    private ?string $L2_17d = null;

    #[ORM\Column(name:"L2_5", type: Types::TEXT, nullable: true)]
    private ?string $L2_5 = null;

    #[ORM\Column(name:"L2_18", type: Types::TEXT, nullable: true)]
    private ?string $L2_18 = null;

    #[ORM\Column(name:"L2_19", type: Types::TEXT, nullable: true)]
    private ?string $L2_19 = null;

    #[ORM\Column(name:"L2_20", type: Types::TEXT, nullable: true)]
    private ?string $L2_20 = null;

    #[ORM\Column(name:"L2_21", type: Types::TEXT, nullable: true)]
    private ?string $L2_21 = null;


    #[ORM\Column(name:"L2_6", type: Types::TEXT, nullable: true)]
    private ?string $L2_6 = null;

    #[ORM\Column(name:"L2_7", type: Types::TEXT, nullable: true)]
    private ?string $L2_7 = null;

    #[ORM\Column(name:"L2_8", type: Types::TEXT, nullable: true)]
    private ?string $L2_8 = null;

    #[ORM\Column(name:"L2_9", type: Types::TEXT, nullable: true)]
    private ?string $L2_9 = null;

    #[ORM\Column(name:"L2_10", type: Types::TEXT, nullable: true)]
    private ?string $L2_10 = null;

    #[ORM\Column(name:"L2_11", type: Types::TEXT, nullable: true)]
    private ?string $L2_11 = null;

    #[ORM\Column(name:"L2_12", type: Types::TEXT, nullable: true)]
    private ?string $L2_12 = null;

    #[ORM\Column(name:"L2_13", length: 255, nullable: true)]
    private ?string $L2_13 = null;

    #[ORM\Column(name:"L2_14", type: Types::TEXT, nullable: true)]
    private ?string $L2_14 = null;

    #[ORM\Column(name:"L2_15", type: Types::TEXT, nullable: true)]
    private ?string $L2_15 = null;

    #[ORM\Column(name:"L2_22",type: Types::TEXT, nullable: true)]
    private ?string $L2_22 = null;

    #[ORM\Column(name:"L2_23",type: Types::TEXT, nullable: true)]
    private ?string $L2_23 = null;

    #[ORM\Column(name:"L2_24",type: Types::TEXT, nullable: true)]
    private ?string $L2_24 = null;

    #[ORM\Column(name:"L2_25",type: Types::TEXT, nullable: true)]
    private ?string $L2_25 = null;

    #[ORM\Column(name:"L2_26",type: Types::TEXT, nullable: true)]
    private ?string $L2_26 = null;

    #[ORM\Column(name:"L2_27",type: Types::TEXT, nullable: true)]
    private ?string $L2_27 = null;

    #[ORM\Column(name:"L2_28",type: Types::TEXT, nullable: true)]
    private ?string $L2_28 = null;

    #[ORM\Column(name:"L2_29",type: Types::TEXT, nullable: true)]
    private ?string $L2_29 = null;

    #[ORM\Column(name:"L2_30",type: Types::TEXT, nullable: true)]
    private ?string $L2_30 = null;

    #[ORM\Column(name:"L2_31",type: Types::TEXT, nullable: true)]
    private ?string $L2_31 = null;

    #[ORM\Column(name:"L2_32",type: Types::TEXT, nullable: true)]
    private ?string $L2_32 = null;

    #[ORM\Column(name:"L2_33",type: Types::TEXT, nullable: true)]
    private ?string $L2_33 = null;

    #[ORM\Column(name:"L2_34",type: Types::TEXT, nullable: true)]
    private ?string $L2_34 = null;

    #[ORM\Column(name:"L2_35",type: Types::TEXT, nullable: true)]
    private ?string $L2_35 = null;

    #[ORM\Column(name:"L2_36",type: Types::TEXT, nullable: true)]
    private ?string $L2_36 = null;

    #[ORM\Column(name:"L2_37",type: Types::TEXT, nullable: true)]
    private ?string $L2_37 = null;

    #[ORM\Column(name:"L2_38",type: Types::TEXT, nullable: true)]
    private ?string $L2_38 = null;

    #[ORM\Column(name:"L2_39",type: Types::TEXT, nullable: true)]
    private ?string $L2_39 = null;

    #[ORM\Column(name:"L2_40",type: Types::TEXT, nullable: true)]
    private ?string $L2_40 = null;

    #[ORM\Column(name:"L2_41",type: Types::TEXT, nullable: true)]
    private ?string $L2_41 = null;

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
    public function getA5(): ?string
    {
        return $this->A5;
    }

    public function setA5(?string $A5): static
    {
        $this->A5 = $A5;

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

    public function getA19(): ?string
    {
        return $this->A19;
    }

    public function setA19(?string $A19): static
    {
        $this->A19 = $A19;

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

    public function getL11(): ?string
    {
        return $this->L1_1;
    }

    public function setL11(?string $L1_1): static
    {
        $this->L1_1 = $L1_1;

        return $this;
    }

    public function getL12(): ?string
    {
        return $this->L1_2;
    }

    public function setL12(?string $L1_2): static
    {
        $this->L1_2 = $L1_2;

        return $this;
    }

    public function getL13(): ?string
    {
        return $this->L1_3;
    }

    public function setL13(?string $L1_3): static
    {
        $this->L1_3 = $L1_3;

        return $this;
    }

    public function getL14(): ?string
    {
        return $this->L1_4;
    }

    public function setL14(?string $L1_4): static
    {
        $this->L1_4 = $L1_4;

        return $this;
    }

    public function getL15(): ?string
    {
        return $this->L1_5;
    }

    public function setL15(?string $L1_5): static
    {
        $this->L1_5 = $L1_5;

        return $this;
    }

    public function getL16(): ?string
    {
        return $this->L1_6;
    }

    public function setL16(?string $L1_6): static
    {
        $this->L1_6 = $L1_6;

        return $this;
    }

    public function getL17(): ?string
    {
        return $this->L1_7;
    }

    public function setL17(?string $L1_7): static
    {
        $this->L1_7 = $L1_7;

        return $this;
    }

    public function getL18(): ?string
    {
        return $this->L1_8;
    }

    public function setL18(?string $L1_8): static
    {
        $this->L1_8 = $L1_8;

        return $this;
    }

    public function getL19(): ?string
    {
        return $this->L1_9;
    }

    public function setL19(?string $L1_9): static
    {
        $this->L1_9 = $L1_9;

        return $this;
    }

    public function getL19Autre(): ?string
    {
        return $this->L1_9_autre;
    }

    public function setL19Autre(?string $L1_9_autre): static
    {
        $this->L1_9_autre = $L1_9_autre;

        return $this;
    }

    public function getL110(): ?string
    {
        return $this->L1_10;
    }

    public function setL110(?string $L1_10): static
    {
        $this->L1_10 = $L1_10;

        return $this;
    }

    public function getL111(): ?string
    {
        return $this->L1_11;
    }

    public function setL111(?string $L1_11): static
    {
        $this->L1_11 = $L1_11;

        return $this;
    }

    public function getL111a(): ?string
    {
        return $this->L1_11a;
    }

    public function setL111a(?string $L1_11a): static
    {
        $this->L1_11a = $L1_11a;

        return $this;
    }

    public function getL112(): ?string
    {
        return $this->L1_12;
    }

    public function setL112(?string $L1_12): static
    {
        $this->L1_12 = $L1_12;

        return $this;
    }

    public function getL113(): ?string
    {
        return $this->L1_13;
    }

    public function setL113(?string $L1_13): static
    {
        $this->L1_13 = $L1_13;

        return $this;
    }

    public function getL114(): ?string
    {
        return $this->L1_14;
    }

    public function setL114(?string $L1_14): static
    {
        $this->L1_14 = $L1_14;

        return $this;
    }

    public function getL115(): ?string
    {
        return $this->L1_15;
    }

    public function setL115(?string $L1_15): static
    {
        $this->L1_15 = $L1_15;

        return $this;
    }

    public function getL116(): ?string
    {
        return $this->L1_16;
    }

    public function setL116(?string $L1_16): static
    {
        $this->L1_16 = $L1_16;

        return $this;
    }

    public function getL117(): ?string
    {
        return $this->L1_17;
    }

    public function setL117(?string $L1_17): static
    {
        $this->L1_17 = $L1_17;

        return $this;
    }

    public function getL118(): ?string
    {
        return $this->L1_18;
    }

    public function setL118(?string $L1_18): static
    {
        $this->L1_18 = $L1_18;

        return $this;
    }

    public function getL119(): ?string
    {
        return $this->L1_19;
    }

    public function setL119(?string $L1_19): static
    {
        $this->L1_19 = $L1_19;

        return $this;
    }

    public function getL120(): ?string
    {
        return $this->L1_20;
    }

    public function setL120(?string $L1_20): static
    {
        $this->L1_20 = $L1_20;

        return $this;
    }

    public function getL121(): ?string
    {
        return $this->L1_21;
    }

    public function setL121(?string $L1_21): static
    {
        $this->L1_21 = $L1_21;

        return $this;
    }

    public function getL121Autre(): ?string
    {
        return $this->L1_21_autre;
    }

    public function setL121Autre(?string $L1_21_autre): static
    {
        $this->L1_21_autre = $L1_21_autre;

        return $this;
    }

    public function getL122(): ?string
    {
        return $this->L1_22;
    }

    public function setL122(?string $L1_22): static
    {
        $this->L1_22 = $L1_22;

        return $this;
    }

    public function getL122Autre(): ?string
    {
        return $this->L1_22_autre;
    }

    public function setL122Autre(?string $L1_22_autre): static
    {
        $this->L1_22_autre = $L1_22_autre;

        return $this;
    }

    public function getL123(): ?string
    {
        return $this->L1_23;
    }

    public function setL123(?string $L1_23): static
    {
        $this->L1_23 = $L1_23;

        return $this;
    }
    public function getL123a(): ?string
    {
        return $this->L1_23a;
    }

    public function setL123a(?string $L1_23a): static
    {
        $this->L1_23a = $L1_23a;

        return $this;
    }

    public function getL124(): ?string
    {
        return $this->L1_24;
    }

    public function setL124(?string $L1_24): static
    {
        $this->L1_24 = $L1_24;

        return $this;
    }

    public function getL125a(): ?string
    {
        return $this->L1_25a;
    }

    public function setL125a(?string $L1_25a): static
    {
        $this->L1_25a = $L1_25a;

        return $this;
    }

    public function getL125b(): ?string
    {
        return $this->L1_25b;
    }

    public function setL125b(?string $L1_25b): static
    {
        $this->L1_25b = $L1_25b;

        return $this;
    }

    public function getL125c(): ?string
    {
        return $this->L1_25c;
    }

    public function setL125c(?string $L1_25c): static
    {
        $this->L1_25c = $L1_25c;

        return $this;
    }

    public function getL125d(): ?string
    {
        return $this->L1_25d;
    }

    public function setL125d(?string $L1_25d): static
    {
        $this->L1_25d = $L1_25d;

        return $this;
    }

    public function getL125e(): ?string
    {
        return $this->L1_25e;
    }

    public function setL125e(?string $L1_25e): static
    {
        $this->L1_25e = $L1_25e;

        return $this;
    }

    public function getL125f(): ?string
    {
        return $this->L1_25f;
    }

    public function setL125f(?string $L1_25f): static
    {
        $this->L1_25f = $L1_25f;

        return $this;
    }

    public function getL126a(): ?string
    {
        return $this->L1_26a;
    }

    public function setL126a(?string $L1_26a): static
    {
        $this->L1_26a = $L1_26a;

        return $this;
    }

    public function getL126b(): ?string
    {
        return $this->L1_26b;
    }

    public function setL126b(?string $L1_26b): static
    {
        $this->L1_26b = $L1_26b;

        return $this;
    }

    public function getL126c(): ?string
    {
        return $this->L1_26c;
    }

    public function setL126c(?string $L1_26c): static
    {
        $this->L1_26c = $L1_26c;

        return $this;
    }

    public function getL127(): ?string
    {
        return $this->L1_27;
    }

    public function setL127(?string $L1_27): static
    {
        $this->L1_27 = $L1_27;

        return $this;
    }

    public function getL128(): ?string
    {
        return $this->L1_28;
    }

    public function setL128(?string $L1_28): static
    {
        $this->L1_28 = $L1_28;

        return $this;
    }

    public function getL129(): ?string
    {
        return $this->L1_29;
    }

    public function setL129(?string $L1_29): static
    {
        $this->L1_29 = $L1_29;

        return $this;
    }

    public function getL130(): ?string
    {
        return $this->L1_30;
    }

    public function setL130(?string $L1_30): static
    {
        $this->L1_30 = $L1_30;

        return $this;
    }

    public function getL131(): ?string
    {
        return $this->L1_31;
    }

    public function setL131(?string $L1_31): static
    {
        $this->L1_31 = $L1_31;

        return $this;
    }

    public function getL132(): ?string
    {
        return $this->L1_32;
    }

    public function setL132(?string $L1_32): static
    {
        $this->L1_32 = $L1_32;

        return $this;
    }

    public function getL133(): ?string
    {
        return $this->L1_33;
    }

    public function setL133(?string $L1_33): static
    {
        $this->L1_33 = $L1_33;

        return $this;
    }

    public function getL134(): ?string
    {
        return $this->L1_34;
    }

    public function setL134(?string $L1_34): static
    {
        $this->L1_34 = $L1_34;

        return $this;
    }

    public function getL135(): ?string
    {
        return $this->L1_35;
    }

    public function setL135(?string $L1_35): static
    {
        $this->L1_35 = $L1_35;

        return $this;
    }

    public function getL136(): ?string
    {
        return $this->L1_36;
    }

    public function setL136(?string $L1_36): static
    {
        $this->L1_36 = $L1_36;

        return $this;
    }

    public function getL137(): ?string
    {
        return $this->L1_37;
    }

    public function setL137(?string $L1_37): static
    {
        $this->L1_37 = $L1_37;

        return $this;
    }

    public function getL138(): ?string
    {
        return $this->L1_38;
    }

    public function setL138(?string $L1_38): static
    {
        $this->L1_38 = $L1_38;

        return $this;
    }

    public function getL139(): ?string
    {
        return $this->L1_39;
    }

    public function setL139(?string $L1_39): static
    {
        $this->L1_39 = $L1_39;

        return $this;
    }

    public function getL140(): ?string
    {
        return $this->L1_40;
    }

    public function setL140(?string $L1_40): static
    {
        $this->L1_40 = $L1_40;

        return $this;
    }

    public function getL141(): ?string
    {
        return $this->L1_41;
    }

    public function setL141(?string $L1_41): static
    {
        $this->L1_41 = $L1_41;

        return $this;
    }

    public function getL142(): ?string
    {
        return $this->L1_42;
    }

    public function setL142(?string $L1_42): static
    {
        $this->L1_42 = $L1_42;

        return $this;
    }

    public function getL143(): ?string
    {
        return $this->L1_43;
    }

    public function setL143(?string $L1_43): static
    {
        $this->L1_43 = $L1_43;

        return $this;
    }

    public function getL144(): ?string
    {
        return $this->L1_44;
    }

    public function setL144(?string $L1_44): static
    {
        $this->L1_44 = $L1_44;

        return $this;
    }

    public function getL145(): ?string
    {
        return $this->L1_45;
    }

    public function setL145(?string $L1_45): static
    {
        $this->L1_45 = $L1_45;

        return $this;
    }

    public function getL146(): ?string
    {
        return $this->L1_46;
    }

    public function setL146(?string $L1_46): static
    {
        $this->L1_46 = $L1_46;

        return $this;
    }

    public function getL147(): ?string
    {
        return $this->L1_47;
    }

    public function setL147(?string $L1_47): static
    {
        $this->L1_47 = $L1_47;

        return $this;
    }

    public function getL148(): ?string
    {
        return $this->L1_48;
    }

    public function setL148(?string $L1_48): static
    {
        $this->L1_48 = $L1_48;

        return $this;
    }

    public function getL149(): ?string
    {
        return $this->L1_49;
    }

    public function setL149(?string $L1_49): static
    {
        $this->L1_49 = $L1_49;

        return $this;
    }

    public function getL149Autre(): ?string
    {
        return $this->L1_49_autre;
    }

    public function setL149Autre(?string $L1_49_autre): static
    {
        $this->L1_49_autre = $L1_49_autre;

        return $this;
    }

    public function getL150(): ?int
    {
        return $this->L1_50;
    }

    public function setL150(?int $L1_50): static
    {
        $this->L1_50 = $L1_50;

        return $this;
    }

    public function getL151(): ?string
    {
        return $this->L1_51;
    }

    public function setL151(?string $L1_51): static
    {
        $this->L1_51 = $L1_51;

        return $this;
    }

    public function getL152(): ?string
    {
        return $this->L1_52;
    }

    public function setL152(?string $L1_52): static
    {
        $this->L1_52 = $L1_52;

        return $this;
    }

    public function getL152Autre(): ?string
    {
        return $this->L1_52_autre;
    }

    public function setL152Autre(?string $L1_52_autre): static
    {
        $this->L1_52_autre = $L1_52_autre;

        return $this;
    }

    public function getL153(): ?string
    {
        return $this->L1_53;
    }

    public function setL153(?string $L1_53): static
    {
        $this->L1_53 = $L1_53;

        return $this;
    }

    public function getL154(): ?string
    {
        return $this->L1_54;
    }

    public function setL154(?string $L1_54): static
    {
        $this->L1_54 = $L1_54;

        return $this;
    }

    public function getL155(): ?string
    {
        return $this->L1_55;
    }

    public function setL155(?string $L1_55): static
    {
        $this->L1_55 = $L1_55;

        return $this;
    }

    public function getL156(): ?string
    {
        return $this->L1_56;
    }

    public function setL156(?string $L1_56): static
    {
        $this->L1_56 = $L1_56;

        return $this;
    }

    public function getL157(): ?int
    {
        return $this->L1_57;
    }

    public function setL157(?int $L1_57): static
    {
        $this->L1_57 = $L1_57;

        return $this;
    }

    public function getL158(): ?int
    {
        return $this->L1_58;
    }

    public function setL158(?int $L1_58): static
    {
        $this->L1_58 = $L1_58;

        return $this;
    }

    public function getL159(): ?int
    {
        return $this->L1_59;
    }

    public function setL159(?int $L1_59): static
    {
        $this->L1_59 = $L1_59;

        return $this;
    }

    public function getL160(): ?int
    {
        return $this->L1_60;
    }

    public function setL160(?int $L1_60): static
    {
        $this->L1_60 = $L1_60;

        return $this;
    }

    public function getL161(): ?string
    {
        return $this->L1_61;
    }

    public function setL161(?string $L1_61): static
    {
        $this->L1_61 = $L1_61;

        return $this;
    }
    public function getL185(): ?string
    {
        return $this->L1_85;
    }

    public function setL185(?string $L1_85): static
    {
        $this->L1_85 = $L1_85;

        return $this;
    }

    public function getL186(): ?string
    {
        return $this->L1_86;
    }

    public function setL186(?string $L1_86): static
    {
        $this->L1_86 = $L1_86;

        return $this;
    }
    public function getL187(): ?string
    {
        return $this->L1_87;
    }

    public function setL187(?string $L1_87): static
    {
        $this->L1_87 = $L1_87;

        return $this;
    }
    public function getL188(): ?string
    {
        return $this->L1_88;
    }

    public function setL188(?string $L1_88): static
    {
        $this->L1_88 = $L1_88;

        return $this;
    }
    public function getL189(): ?string
    {
        return $this->L1_89;
    }

    public function setL189(?string $L1_89): static
    {
        $this->L1_89 = $L1_89;

        return $this;
    }
    public function getL190(): ?string
    {
        return $this->L1_90;
    }

    public function setL190(?string $L1_90): static
    {
        $this->L1_90 = $L1_90;

        return $this;
    }
    public function getL191(): ?string
    {
        return $this->L1_91;
    }

    public function setL191(?string $L1_91): static
    {
        $this->L1_91 = $L1_91;

        return $this;
    }
    public function getL192(): ?string
    {
        return $this->L1_92;
    }

    public function setL192(?string $L1_92): static
    {
        $this->L1_92 = $L1_92;

        return $this;
    }
    public function getL193(): ?string
    {
        return $this->L1_93;
    }

    public function setL193(?string $L1_93): static
    {
        $this->L1_93 = $L1_93;

        return $this;
    }
    public function getL194(): ?string
    {
        return $this->L1_94;
    }

    public function setL194(?string $L1_94): static
    {
        $this->L1_94 = $L1_94;

        return $this;
    }
    public function getL195(): ?string
    {
        return $this->L1_95;
    }

    public function setL195(?string $L1_95): static
    {
        $this->L1_95 = $L1_95;

        return $this;
    }
    public function getL196(): ?string
    {
        return $this->L1_96;
    }

    public function setL196(?string $L1_96): static
    {
        $this->L1_96 = $L1_96;

        return $this;
    }
    public function getL198(): ?string
    {
        return $this->L1_98;
    }

    public function setL198(?string $L1_98): static
    {
        $this->L1_98 = $L1_98;

        return $this;
    }
    
    public function getL162(): ?string
    {
        return $this->L1_62;
    }

    public function setL162(?string $L1_62): static
    {
        $this->L1_62 = $L1_62;

        return $this;
    }

    public function getL163(): ?string
    {
        return $this->L1_63;
    }

    public function setL163(?string $L1_63): static
    {
        $this->L1_63 = $L1_63;

        return $this;
    }

    public function getL164(): ?string
    {
        return $this->L1_64;
    }

    public function setL164(?string $L1_64): static
    {
        $this->L1_64 = $L1_64;

        return $this;
    }

    public function getL165(): ?string
    {
        return $this->L1_65;
    }

    public function setL165(?string $L1_65): static
    {
        $this->L1_65 = $L1_65;

        return $this;
    }

    public function getL166(): ?string
    {
        return $this->L1_66;
    }

    public function setL166(?string $L1_66): static
    {
        $this->L1_66 = $L1_66;

        return $this;
    }

    public function getL167(): ?string
    {
        return $this->L1_67;
    }

    public function setL167(?string $L1_67): static
    {
        $this->L1_67 = $L1_67;

        return $this;
    }

    public function getL168(): ?string
    {
        return $this->L1_68;
    }

    public function setL168(?string $L1_68): static
    {
        $this->L1_68 = $L1_68;

        return $this;
    }

    public function getL168Autre(): ?string
    {
        return $this->L1_68_autre;
    }

    public function setL168Autre(?string $L1_68_autre): static
    {
        $this->L1_68_autre = $L1_68_autre;

        return $this;
    }

    public function getL169(): ?string
    {
        return $this->L1_69;
    }

    public function setL169(?string $L1_69): static
    {
        $this->L1_69 = $L1_69;

        return $this;
    }

    public function getL170(): ?string
    {
        return $this->L1_70;
    }

    public function setL170(?string $L1_70): static
    {
        $this->L1_70 = $L1_70;

        return $this;
    }

    public function getL171(): ?string
    {
        return $this->L1_71;
    }

    public function setL171(?string $L1_71): static
    {
        $this->L1_71 = $L1_71;

        return $this;
    }

    public function getL172(): ?string
    {
        return $this->L1_72;
    }

    public function setL172(?string $L1_72): static
    {
        $this->L1_72 = $L1_72;

        return $this;
    }

    public function getL173(): ?string
    {
        return $this->L1_73;
    }

    public function setL173(?string $L1_73): static
    {
        $this->L1_73 = $L1_73;

        return $this;
    }

    public function getL174(): ?string
    {
        return $this->L1_74;
    }

    public function setL174(?string $L1_74): static
    {
        $this->L1_74 = $L1_74;

        return $this;
    }

    public function getL175(): ?string
    {
        return $this->L1_75;
    }

    public function setL175(?string $L1_75): static
    {
        $this->L1_75 = $L1_75;

        return $this;
    }

    public function getL176(): ?string
    {
        return $this->L1_76;
    }

    public function setL176(?string $L1_76): static
    {
        $this->L1_76 = $L1_76;

        return $this;
    }

    public function getL177(): ?string
    {
        return $this->L1_77;
    }

    public function setL177(?string $L1_77): static
    {
        $this->L1_77 = $L1_77;

        return $this;
    }

    public function getL178(): ?string
    {
        return $this->L1_78;
    }

    public function setL178(?string $L1_78): static
    {
        $this->L1_78 = $L1_78;

        return $this;
    }

    public function getL179(): ?string
    {
        return $this->L1_79;
    }

    public function setL179(?string $L1_79): static
    {
        $this->L1_79 = $L1_79;

        return $this;
    }

    public function getL180(): ?string
    {
        return $this->L1_80;
    }

    public function setL180(?string $L1_80): static
    {
        $this->L1_80 = $L1_80;

        return $this;
    }

    public function getL181(): ?string
    {
        return $this->L1_81;
    }

    public function setL181(?string $L1_81): static
    {
        $this->L1_81 = $L1_81;

        return $this;
    }

    public function getL182(): ?string
    {
        return $this->L1_82;
    }

    public function setL182(?string $L1_82): static
    {
        $this->L1_82 = $L1_82;

        return $this;
    }

    public function getL183(): ?string
    {
        return $this->L1_83;
    }

    public function setL183(?string $L1_83): static
    {
        $this->L1_83 = $L1_83;

        return $this;
    }

    public function getL184(): ?string
    {
        return $this->L1_84;
    }

    public function setL184(?string $L1_84): static
    {
        $this->L1_84 = $L1_84;

        return $this;
    }
    public function getL1100(): ?string
    {
        return $this->L1_100;
    }

    public function setL1100(?string $L1_100): static
    {
        $this->L1_100 = $L1_100;

        return $this;
    }
    public function getL21(): ?string
    {
        return $this->L2_1;
    }

    public function setL21(?string $L2_1): static
    {
        $this->L2_1 = $L2_1;

        return $this;
    }

    public function getL21Autre(): ?string
    {
        return $this->L2_1_autre;
    }

    public function setL21Autre(?string $L2_1_autre): static
    {
        $this->L2_1_autre = $L2_1_autre;

        return $this;
    }

    public function getL22(): ?int
    {
        return $this->L2_2;
    }

    public function setL22(?int $L2_2): static
    {
        $this->L2_2 = $L2_2;

        return $this;
    }

    public function getL23(): ?string
    {
        return $this->L2_3;
    }

    public function setL23(?string $L2_3): static
    {
        $this->L2_3 = $L2_3;

        return $this;
    }

    public function getL24(): ?string
    {
        return $this->L2_4;
    }

    public function setL24(?string $L2_4): static
    {
        $this->L2_4 = $L2_4;

        return $this;
    }
    public function getL216(): ?string
    {
        return $this->L2_16;
    }

    public function setL216(?string $L2_16): static
    {
        $this->L2_16 = $L2_16;

        return $this;
    }
    public function getL217a(): ?string
    {
        return $this->L2_17a;
    }

    public function setL217a(?string $L2_17a): static
    {
        $this->L2_17a = $L2_17a;

        return $this;
    }
    public function getL217b(): ?string
    {
        return $this->L2_17b;
    }

    public function setL217b(?string $L2_17b): static
    {
        $this->L2_17b = $L2_17b;

        return $this;
    }
    public function getL217c(): ?string
    {
        return $this->L2_17c;
    }

    public function setL217c(?string $L2_17c): static
    {
        $this->L2_17c = $L2_17c;

        return $this;
    }
    public function getL217d(): ?string
    {
        return $this->L2_17d;
    }

    public function setL217d(?string $L2_17d): static
    {
        $this->L2_17d = $L2_17d;

        return $this;
    }

    public function getL25(): ?string
    {
        return $this->L2_5;
    }

    public function setL25(?string $L2_5): static
    {
        $this->L2_5 = $L2_5;

        return $this;
    }
    public function getL218(): ?string
    {
        return $this->L2_18;
    }

    public function setL218(?string $L2_18): static
    {
        $this->L2_18 = $L2_18;

        return $this;
    }
    public function getL219(): ?string
    {
        return $this->L2_19;
    }

    public function setL219(?string $L2_19): static
    {
        $this->L2_19 = $L2_19;

        return $this;
    }
    public function getL220(): ?string
    {
        return $this->L2_20;
    }

    public function setL220(?string $L2_20): static
    {
        $this->L2_20 = $L2_20;

        return $this;
    }


    public function getL221(): ?string
    {
        return $this->L2_21;
    }

    public function setL221(?string $L2_21): static
    {
        $this->L2_21 = $L2_21;

        return $this;
    }
    public function getL26(): ?string
    {
        return $this->L2_6;
    }

    public function setL26(?string $L2_6): static
    {
        $this->L2_6 = $L2_6;

        return $this;
    }

    public function getL27(): ?string
    {
        return $this->L2_7;
    }

    public function setL27(?string $L2_7): static
    {
        $this->L2_7 = $L2_7;

        return $this;
    }

    public function getL28(): ?string
    {
        return $this->L2_8;
    }

    public function setL28(?string $L2_8): static
    {
        $this->L2_8 = $L2_8;

        return $this;
    }

    public function getL29(): ?string
    {
        return $this->L2_9;
    }

    public function setL29(?string $L2_9): static
    {
        $this->L2_9 = $L2_9;

        return $this;
    }

    public function getL210(): ?string
    {
        return $this->L2_10;
    }

    public function setL210(?string $L2_10): static
    {
        $this->L2_10 = $L2_10;

        return $this;
    }

    public function getL211(): ?string
    {
        return $this->L2_11;
    }

    public function setL211(?string $L2_11): static
    {
        $this->L2_11 = $L2_11;

        return $this;
    }

    public function getL212(): ?string
    {
        return $this->L2_12;
    }

    public function setL212(string $L2_12): static
    {
        $this->L2_12 = $L2_12;

        return $this;
    }

    public function getL213(): ?string
    {
        return $this->L2_13;
    }

    public function setL213(?string $L2_13): static
    {
        $this->L2_13 = $L2_13;

        return $this;
    }

    public function getL214(): ?string
    {
        return $this->L2_14;
    }

    public function setL214(?string $L2_14): static
    {
        $this->L2_14 = $L2_14;

        return $this;
    }

    public function getL215(): ?string
    {
        return $this->L2_15;
    }

    public function setL215(?string $L2_15): static
    {
        $this->L2_15 = $L2_15;

        return $this;
    }

    public function getL222(): ?string
    {
        return $this->L2_22;
    }

    public function setL222(?string $L2_22): static
    {
        $this->L2_22 = $L2_22;

        return $this;
    }

    public function getL223(): ?string
    {
        return $this->L2_23;
    }

    public function setL223(?string $L2_23): static
    {
        $this->L2_23 = $L2_23;

        return $this;
    }

    public function getL224(): ?string
    {
        return $this->L2_24;
    }

    public function setL224(?string $L2_24): static
    {
        $this->L2_24 = $L2_24;

        return $this;
    }

    public function getL225(): ?string
    {
        return $this->L2_25;
    }

    public function setL225(?string $L2_25): static
    {
        $this->L2_25 = $L2_25;

        return $this;
    }

    public function getL226(): ?string
    {
        return $this->L2_26;
    }

    public function setL226(?string $L2_26): static
    {
        $this->L2_26 = $L2_26;

        return $this;
    }

    public function getL227(): ?string
    {
        return $this->L2_27;
    }

    public function setL227(?string $L2_27): static
    {
        $this->L2_27 = $L2_27;

        return $this;
    }

    public function getL228(): ?string
    {
        return $this->L2_28;
    }

    public function setL228(?string $L2_28): static
    {
        $this->L2_28 = $L2_28;

        return $this;
    }

    public function getL229(): ?string
    {
        return $this->L2_29;
    }

    public function setL229(?string $L2_29): static
    {
        $this->L2_29 = $L2_29;

        return $this;
    }

    public function getL230(): ?string
    {
        return $this->L2_30;
    }

    public function setL230(?string $L2_30): static
    {
        $this->L2_30 = $L2_30;

        return $this;
    }

    public function getL231(): ?string
    {
        return $this->L2_31;
    }

    public function setL231(?string $L2_31): static
    {
        $this->L2_31 = $L2_31;

        return $this;
    }

    public function getL232(): ?string
    {
        return $this->L2_32;
    }

    public function setL232(?string $L2_32): static
    {
        $this->L2_32 = $L2_32;

        return $this;
    }

    public function getL233(): ?string
    {
        return $this->L2_33;
    }

    public function setL233(?string $L2_33): static
    {
        $this->L2_33 = $L2_33;

        return $this;
    }

    public function getL234(): ?string
    {
        return $this->L2_34;
    }

    public function setL234(?string $L2_34): static
    {
        $this->L2_34 = $L2_34;

        return $this;
    }

    public function getL235(): ?string
    {
        return $this->L2_35;
    }

    public function setL235(?string $L2_35): static
    {
        $this->L2_35 = $L2_35;

        return $this;
    }

    public function getL236(): ?string
    {
        return $this->L2_36;
    }

    public function setL236(?string $L2_36): static
    {
        $this->L2_36 = $L2_36;

        return $this;
    }

    public function getL237(): ?string
    {
        return $this->L2_37;
    }

    public function setL237(?string $L2_37): static
    {
        $this->L2_37 = $L2_37;

        return $this;
    }

    public function getL238(): ?string
    {
        return $this->L2_38;
    }

    public function setL238(?string $L2_38): static
    {
        $this->L2_38 = $L2_38;

        return $this;
    }

    public function getL239(): ?string
    {
        return $this->L2_39;
    }

    public function setL239(?string $L2_39): static
    {
        $this->L2_39 = $L2_39;

        return $this;
    }

    public function getL240(): ?string
    {
        return $this->L2_40;
    }

    public function setL240(?string $L2_40): static
    {
        $this->L2_40 = $L2_40;

        return $this;
    }

    public function getL241(): ?string
    {
        return $this->L2_41;
    }

    public function setL241(?string $L2_41): static
    {
        $this->L2_41 = $L2_41;

        return $this;
    }
}
