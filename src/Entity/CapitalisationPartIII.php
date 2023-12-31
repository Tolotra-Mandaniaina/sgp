<?php

namespace App\Entity;

use App\Repository\CapitalisationPartIIIRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CapitalisationPartIIIRepository::class)]
class CapitalisationPartIII
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

    #[ORM\Column(name:"A5", length: 255, nullable: true)]
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

    #[ORM\Column(name:"A34", length: 10, nullable: true)]
    private ?string $A34 = null;

    #[ORM\Column(name:"A35", length: 15, nullable: true)]
    private ?string $A35 = null;

    #[ORM\Column(name:"L1_1",length: 255, nullable: true)]
    private ?string $L1_1 = null;

    #[ORM\Column(name:"L10_1",length: 255, nullable: true)]
    private ?string $L10_1 = null;

    #[ORM\Column(name:"L10_2",type: Types::TEXT, nullable: true)]
    private ?string $L10_2 = null;

    #[ORM\Column(name:"L10_3",type: Types::TEXT, nullable: true)]
    private ?string $L10_3 = null;

    #[ORM\Column(name:"L10_4",type: Types::TEXT, nullable: true)]
    private ?string $L10_4 = null;

    #[ORM\Column(name:"L10_5",type: Types::TEXT, nullable: true)]
    private ?string $L10_5 = null;

    #[ORM\Column(name:"L10_6",type: Types::TEXT, nullable: true)]
    private ?string $L10_6 = null;

    #[ORM\Column(nullable: true)]
    private ?int $StatutFiche = null;


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
    $value = $this->A12;

    // Ajouter une condition pour vérifier si la valeur est égale à 6
    if ($value === '1') { return 'OP 5';  }
    else if ($value === '2' ) { return 'OP 6';  }
    else if ($value === '3' ) { return 'OP 7';  }
    else if ($value === '4' ) { return 'OP 8';  }
    else if ($value === '5' ) { return 'OP 9';  }
    else if ($value === '6' ) { return 'OP 10';  }


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

    public function getA19(): ?string
    {
            // Récupérer la valeur de A19
        $value = $this->A19;

        // Définir une correspondance entre les nombres et leurs libellés
        $labelMapping = [
            '1' =>  'Biodiversité',
            '2' =>  'Atténuation du changement climatique',
            '3' =>  'Dégradation des sols',
            '4' =>  'Gestion durable des forêts',
            '5' =>  'Eaux internationales',
            '6' =>  'Produits chimiques et déchets',
            '7' =>   'Développement des capacités',
            '8' =>   'Dialogue public société civile',
            '9' => 'Aire et patrimoine des peuples autochtones'
        ];

        // Diviser la chaîne en nombres
        $numbers = explode(' ', $value);

        // Remplacer les nombres par leurs libellés correspondants
        $labels = array_map(function ($number) use ($labelMapping) {
            return $labelMapping[$number] ?? $number;
        }, $numbers);

        // Joindre les libellés avec '/'
        $result = implode(' / ', $labels);

        return $result;
    }


    public function setA19(?string $A19): static
    {
        $this->A19 = $A19;

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

    public function getL11(): ?string
    {
        return $this->L1_1;
    }

    public function setL11(?string $L1_1): static
    {
        $value = $this->L1_1;

        // Ajouter une condition pour vérifier si la valeur est égale à 6
        if ($value === '1') { return 'Oui';  }
        else if ($value === '2' ) { return 'Non';  }
        return $value;
        
    }

    public function getL101(): ?string
    {
        return $this->L10_1;
    }

    public function setL101(?string $L10_1): static
    {
        $this->L10_1 = $L10_1;

        return $this;
    }

    public function getL102(): ?string
    {
        return $this->L10_2;
    }

    public function setL102(?string $L10_2): static
    {
        $this->L10_2 = $L10_2;

        return $this;
    }

    public function getL103(): ?string
    {
        return $this->L10_3;
    }

    public function setL103(?string $L10_3): static
    {
        $this->L10_3 = $L10_3;

        return $this;
    }

    public function getL104(): ?string
    {
        return $this->L10_4;
    }

    public function setL104(?string $L10_4): static
    {
        $this->L10_4 = $L10_4;

        return $this;
    }

    public function getL105(): ?string
    {
        return $this->L10_5;
    }

    public function setL105(?string $L10_5): static
    {
        $this->L10_5 = $L10_5;

        return $this;
    }

    public function getL106(): ?string
    {
        return $this->L10_6;
    }

    public function setL106(?string $L10_6): static
    {
        $this->L10_6 = $L10_6;

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
