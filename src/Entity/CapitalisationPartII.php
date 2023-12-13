<?php

namespace App\Entity;

use App\Repository\CapitalisationPartIIRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CapitalisationPartIIRepository::class)]
class CapitalisationPartII
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

    #[ORM\Column(name:"A33", length: 10, nullable: true)]
    private ?string $A33 = null;

    #[ORM\Column(name:"A34", length: 15, nullable: true)]
    private ?string $A34 = null;

   
    #[ORM\Column(name:"L1_1", length: 15, nullable: true)]
    private ?string $L1_1 = null;

    #[ORM\Column(name:"L1_13", type: Types::TEXT, nullable: true)]
    private ?string $L1_13 = null;

    #[ORM\Column(name:"L3_1", type: Types::TEXT, nullable: true)]
    private ?string $L3_1 = null;

    #[ORM\Column(name:"L3_2", type: Types::TEXT, nullable: true)]
    private ?string $L3_2 = null;

    #[ORM\Column(name:"L3_3", type: Types::TEXT, nullable: true)]
    private ?string $L3_3 = null;

    #[ORM\Column(name:"L3_4", type: Types::TEXT, nullable: true)]
    private ?string $L3_4 = null;

    #[ORM\Column(name:"L3_5", type: Types::TEXT, nullable: true)]
    private ?string $L3_5 = null;

    #[ORM\Column(name:"L3_6", type: Types::TEXT, nullable: true)]
    private ?string $L3_6 = null;

    #[ORM\Column(name:"L3_7", type: Types::TEXT, nullable: true)]
    private ?string $L3_7 = null;

    #[ORM\Column(name:"L3_8", type: Types::TEXT, nullable: true)]
    private ?string $L3_8 = null;

    #[ORM\Column(name:"L3_9", type: Types::TEXT, nullable: true)]
    private ?string $L3_9 = null;

    #[ORM\Column(name:"L3_10", type: Types::TEXT, nullable: true)]
    private ?string $L3_10 = null;

    #[ORM\Column(name:"L3_11", length: 255, nullable: true)]
    private ?string $L3_11 = null;

    #[ORM\Column(name:"L3_11_autre", type: Types::TEXT, nullable: true)]
    private ?string $L3_11_autre = null;

    #[ORM\Column(name:"L3_12", length: 15, nullable: true)]
    private ?string $L3_12 = null;

    #[ORM\Column(name:"L3_13", type: Types::TEXT, nullable: true)]
    private ?string $L3_13 = null;

    #[ORM\Column(name:"L3_14", type: Types::TEXT, nullable: true)]
    private ?string $L3_14 = null;

    #[ORM\Column(name:"L3_15", type: Types::TEXT, nullable: true)]
    private ?string $L3_15 = null;

    #[ORM\Column(name:"L3_16", type: Types::TEXT, nullable: true)]
    private ?string $L3_16 = null;

    #[ORM\Column(name:"L3_17", type: Types::TEXT, nullable: true)]
    private ?string $L3_17 = null;

    #[ORM\Column(name:"L3_18", type: Types::TEXT, nullable: true)]
    private ?string $L3_18 = null;

    #[ORM\Column(name:"L3_18_autre", type: Types::TEXT, nullable: true)]
    private ?string $L3_18_autre = null;

    #[ORM\Column(name:"L3_19", type: Types::TEXT, nullable: true)]
    private ?string $L3_19 = null;

    #[ORM\Column(name:"L3_20", type: Types::TEXT, nullable: true)]
    private ?string $L3_20 = null;

    #[ORM\Column(name:"L3_21", type: Types::TEXT, nullable: true)]
    private ?string $L3_21 = null;

    #[ORM\Column(name:"L3_22", type: Types::TEXT, nullable: true)]
    private ?string $L3_22 = null;

    #[ORM\Column(name:"L3_22_autre", type: Types::TEXT, nullable: true)]
    private ?string $L3_22_autre = null;

    #[ORM\Column(name:"L3_23", type: Types::TEXT, nullable: true)]
    private ?string $L3_23 = null;

    #[ORM\Column(name:"L3_24", type: Types::TEXT, nullable: true)]
    private ?string $L3_24 = null;

    #[ORM\Column(name:"L3_25", type: Types::TEXT, nullable: true)]
    private ?string $L3_25 = null;

    #[ORM\Column(name:"L3_26", type: Types::TEXT, nullable: true)]
    private ?string $L3_26 = null;

    #[ORM\Column(name:"L3_27", type: Types::TEXT, nullable: true)]
    private ?string $L3_27 = null;

    #[ORM\Column(name:"L3_28", length: 255, nullable: true)]
    private ?string $L3_28 = null;

    #[ORM\Column(name:"L3_28_autre", type: Types::TEXT, nullable: true)]
    private ?string $L3_28_autre = null;

    #[ORM\Column(name:"L3_29", type: Types::TEXT, nullable: true)]
    private ?string $L3_29 = null;

    #[ORM\Column(name:"L3_30", type: Types::TEXT, nullable: true)]
    private ?string $L3_30 = null;

    #[ORM\Column(name:"L3_31", type: Types::TEXT, nullable: true)]
    private ?string $L3_31 = null;

    #[ORM\Column(name:"L3_32", type: Types::TEXT, nullable: true)]
    private ?string $L3_32 = null;

    #[ORM\Column(name:"L3_33", type: Types::TEXT, nullable: true)]
    private ?string $L3_33 = null;

    #[ORM\Column(name:"L3_34", type: Types::TEXT, nullable: true)]
    private ?string $L3_34 = null;

    #[ORM\Column(name:"L3_35", type: Types::TEXT, nullable: true)]
    private ?string $L3_35 = null;

    #[ORM\Column(name:"L3_36", type: Types::TEXT, nullable: true)]
    private ?string $L3_36 = null;

    #[ORM\Column(name:"L3_37", type: Types::TEXT, nullable: true)]
    private ?string $L3_37 = null;

    #[ORM\Column(name:"L3_38", type: Types::TEXT, nullable: true)]
    private ?string $L3_38 = null;

    #[ORM\Column(name:"L3_39", type: Types::TEXT, nullable: true)]
    private ?string $L3_39 = null;

    #[ORM\Column(name:"L3_40", length: 15, nullable: true)]
    private ?string $L3_40 = null;

    #[ORM\Column(name:"L3_41", type: Types::TEXT, nullable: true)]
    private ?string $L3_41 = null;

    #[ORM\Column(name:"L3_42", type: Types::TEXT, nullable: true)]
    private ?string $L3_42 = null;

    #[ORM\Column(name:"L3_43", type: Types::TEXT, nullable: true)]
    private ?string $L3_43 = null;

    #[ORM\Column(name:"L3_44", type: Types::TEXT, nullable: true)]
    private ?string $L3_44 = null;

    #[ORM\Column(name:"L3_45", length: 15, nullable: true)]
    private ?string $L3_45 = null;

    #[ORM\Column(name:"L3_46", type: Types::TEXT, nullable: true)]
    private ?string $L3_46 = null;

    #[ORM\Column(name:"L3_47", type: Types::TEXT, nullable: true)]
    private ?string $L3_47 = null;

    #[ORM\Column(name:"L3_48", type: Types::TEXT, nullable: true)]
    private ?string $L3_48 = null;

    #[ORM\Column(name:"L3_49", type: Types::TEXT, nullable: true)]
    private ?string $L3_49 = null;

    #[ORM\Column(name:"L3_50", type: Types::TEXT, nullable: true)]
    private ?string $L3_50 = null;

    #[ORM\Column(name:"L3_51", type: Types::TEXT, nullable: true)]
    private ?string $L3_51 = null;

    #[ORM\Column(name:"L3_52", type: Types::TEXT, nullable: true)]
    private ?string $L3_52 = null;

    #[ORM\Column(name:"L3_53", type: Types::TEXT, nullable: true)]
    private ?string $L3_53 = null;

    #[ORM\Column(name:"L3_54", type: Types::TEXT, nullable: true)]
    private ?string $L3_54 = null;

    #[ORM\Column(name:"L3_55", length: 255, nullable: true)]
    private ?string $L3_55 = null;

    #[ORM\Column(name:"L3_55_autre", type: Types::TEXT, nullable: true)]
    private ?string $L3_55_autre = null;

    #[ORM\Column(name:"L3_56", type: Types::TEXT, nullable: true)]
    private ?string $L3_56 = null;

    #[ORM\Column(name:"L3_57", type: Types::TEXT, nullable: true)]
    private ?string $L3_57 = null;

    #[ORM\Column(name:"L3_58", type: Types::TEXT, nullable: true)]
    private ?string $L3_58 = null;

    #[ORM\Column(name:"L3_58_autre", type: Types::TEXT, nullable: true)]
    private ?string $L3_58_autre = null;

    #[ORM\Column(name:"L3_59", type: Types::TEXT, nullable: true)]
    private ?string $L3_59 = null;

    #[ORM\Column(name:"L3_60", type: Types::TEXT, nullable: true)]
    private ?string $L3_60 = null;

    #[ORM\Column(name:"L3_61", type: Types::TEXT, nullable: true)]
    private ?string $L3_61 = null;

    #[ORM\Column(name:"L3_62", type: Types::TEXT, nullable: true)]
    private ?string $L3_62 = null;

    #[ORM\Column(name:"L3_63", type: Types::TEXT, nullable: true)]
    private ?string $L3_63 = null;

    #[ORM\Column(name:"L3_64", type: Types::TEXT, nullable: true)]
    private ?string $L3_64 = null;

    #[ORM\Column(name:"L3_65", type: Types::TEXT, nullable: true)]
    private ?string $L3_65 = null;

    #[ORM\Column(name:"L3_66", type: Types::TEXT, nullable: true)]
    private ?string $L3_66 = null;

    #[ORM\Column(name:"L3_67", type: Types::TEXT, nullable: true)]
    private ?string $L3_67 = null;

    #[ORM\Column(name:"L3_68", length: 255, nullable: true)]
    private ?string $L3_68 = null;

    #[ORM\Column(name:"L3_68_autre", type: Types::TEXT, nullable: true)]
    private ?string $L3_68_autre = null;

    #[ORM\Column(name:"L3_69", type: Types::TEXT, nullable: true)]
    private ?string $L3_69 = null;

    #[ORM\Column(name:"L3_70", type: Types::TEXT, nullable: true)]
    private ?string $L3_70 = null;

    #[ORM\Column(name:"L3_71", type: Types::TEXT, nullable: true)]
    private ?string $L3_71 = null;

    #[ORM\Column(name:"L3_72", type: Types::TEXT, nullable: true)]
    private ?string $L3_72 = null;

    #[ORM\Column(name:"L3_73", type: Types::TEXT, nullable: true)]
    private ?string $L3_73 = null;

    #[ORM\Column(name:"L3_74", length: 15, nullable: true)]
    private ?string $L3_74 = null;

    #[ORM\Column(name:"L3_75", length: 15, nullable: true)]
    private ?string $L3_75 = null;

    #[ORM\Column(name:"L3_76", type: Types::TEXT, nullable: true)]
    private ?string $L3_76 = null;

    #[ORM\Column(name:"L3_77", length: 15, nullable: true)]
    private ?string $L3_77 = null;

    #[ORM\Column(name:"L3_78", length: 15, nullable: true)]
    private ?string $L3_78 = null;

    #[ORM\Column(name:"L3_79", type: Types::TEXT, nullable: true)]
    private ?string $L3_79 = null;

    #[ORM\Column(name:"L3_120", type: Types::TEXT, nullable: true)]
    private ?string $L3_120 = null;

    #[ORM\Column(name:"L3_121", type: Types::TEXT, nullable: true)]
    private ?string $L3_121 = null;

    #[ORM\Column(name:"L3_122", type: Types::TEXT, nullable: true)]
    private ?string $L3_122 = null;

    #[ORM\Column(name:"L3_123", type: Types::TEXT, nullable: true)]
    private ?string $L3_123 = null;

    #[ORM\Column(name:"L3_124", type: Types::TEXT, nullable: true)]
    private ?string $L3_124 = null;

    #[ORM\Column(name:"L3_125", type: Types::TEXT, nullable: true)]
    private ?string $L3_125 = null;

    #[ORM\Column(name:"L3_126", type: Types::TEXT, nullable: true)]
    private ?string $L3_126 = null;

    #[ORM\Column(name:"L3_127", type: Types::TEXT, nullable: true)]
    private ?string $L3_127 = null;

    #[ORM\Column(name:"L3_128", type: Types::TEXT, nullable: true)]
    private ?string $L3_128 = null;

    #[ORM\Column(name:"L3_129", type: Types::TEXT, nullable: true)]
    private ?string $L3_129 = null;


    #[ORM\Column(name:"L3_80", type: Types::TEXT, nullable: true)]
    private ?string $L3_80 = null;

    #[ORM\Column(name:"L3_81", type: Types::TEXT, nullable: true)]
    private ?string $L3_81 = null;

    #[ORM\Column(name:"L3_82", nullable: true)]
    private ?int $L3_82 = null;

    #[ORM\Column(name:"L3_83", length: 15, nullable: true)]
    private ?string $L3_83 = null;

    #[ORM\Column(name:"L3_84", length: 255, nullable: true)]
    private ?string $L3_84 = null;

    #[ORM\Column(name:"L3_85", nullable: true)]
    private ?int $L3_85 = null;

    #[ORM\Column(name:"L3_86", nullable: true)]
    private ?int $L3_86 = null;

    #[ORM\Column(name:"L3_87", nullable: true)]
    private ?int $L3_87 = null;

    #[ORM\Column(name:"L3_88", nullable: true)]
    private ?int $L3_88 = null;

    #[ORM\Column(name:"L3_89", length: 50, nullable: true)]
    private ?string $L3_89 = null;

    #[ORM\Column(name:"L3_90", type: Types::TEXT, nullable: true)]
    private ?string $L3_90 = null;

    #[ORM\Column(name:"L3_91", nullable: true)]
    private ?int $L3_91 = null;

    #[ORM\Column(name:"L3_92", type: Types::TEXT, nullable: true)]
    private ?string $L3_92 = null;

    #[ORM\Column(name:"L3_93", nullable: true)]
    private ?int $L3_93 = null;

    #[ORM\Column(name:"L3_94", nullable: true)]
    private ?int $L3_94 = null;

    #[ORM\Column(name:"L3_95", nullable: true)]
    private ?int $L3_95 = null;

    #[ORM\Column(name:"L3_96", nullable: true)]
    private ?int $L3_96 = null;


    #[ORM\Column(name:"L3_97", length: 50, nullable: true)]
    private ?string $L3_97 = null;

    #[ORM\Column(name:"L3_98", length: 255, nullable: true)]
    private ?string $L3_98 = null;

    #[ORM\Column(name:"L3_99", type: Types::TEXT, nullable: true)]
    private ?string $L3_99 = null;

    #[ORM\Column(name:"L3_100", nullable: true)]
    private ?int $L3_100 = null;

    #[ORM\Column(name:"L3_101", nullable: true)]
    private ?int $L3_101 = null;

    #[ORM\Column(name:"L3_102", nullable: true)]
    private ?int $L3_102 = null;

    #[ORM\Column(name:"L3_103", type: Types::TEXT, nullable: true)]
    private ?string $L3_103 = null;

    #[ORM\Column(name:"L3_104", type: Types::TEXT, nullable: true)]
    private ?string $L3_104 = null;

    #[ORM\Column(name:"L3_105", length: 50, nullable: true)]
    private ?string $L3_105 = null;

    #[ORM\Column(name:"L3_106", length: 255, nullable: true)]
    private ?string $L3_106 = null;

    #[ORM\Column(name:"L3_107", type: Types::TEXT, nullable: true)]
    private ?string $L3_107 = null;

    #[ORM\Column(name:"L3_108", type: Types::TEXT, nullable: true)]
    private ?string $L3_108 = null;

    #[ORM\Column(name:"L3_109", type: Types::TEXT, nullable: true)]
    private ?string $L3_109 = null;

    #[ORM\Column(name:"L3_110", length: 50, nullable: true)]
    private ?string $L3_110 = null;

    #[ORM\Column(name:"L3_111", length: 255, nullable: true)]
    private ?string $L3_111 = null;

    #[ORM\Column(name:"L3_112", type: Types::TEXT, nullable: true)]
    private ?string $L3_112 = null;

    #[ORM\Column(name:"L3_113", type: Types::TEXT, nullable: true)]
    private ?string $L3_113 = null;

    #[ORM\Column(name:"L3_114", type: Types::TEXT, nullable: true)]
    private ?string $L3_114 = null;

    #[ORM\Column(name:"L3_115", length: 255, nullable: true)]
    private ?string $L3_115 = null;

    #[ORM\Column(name:"L3_116", length: 255, nullable: true)]
    private ?string $L3_116 = null;

    #[ORM\Column(name:"L3_117", length: 255, nullable: true)]
    private ?string $L3_117 = null;

    #[ORM\Column(name:"L3_117_autre", type: Types::TEXT, nullable: true)]
    private ?string $L3_117_autre = null;

    #[ORM\Column(name:"L3_130", type: Types::TEXT, nullable: true)]
    private ?string $L3_130 = null;

    #[ORM\Column(name:"L3_131", type: Types::TEXT, nullable: true)]
    private ?string $L3_131 = null;


    #[ORM\Column(name:"L3_118", type: Types::TEXT, nullable: true)]
    private ?string $L3_118 = null;

    
    #[ORM\Column(name:"L3_119", type: Types::TEXT, nullable: true)]
    private ?string $L3_119 = null;

    #[ORM\Column(name:"L4_26", type: Types::TEXT, nullable: true)]
    private ?string $L4_26 = null;

    #[ORM\Column(name:"L4_26a", type: Types::TEXT, nullable: true)]
    private ?string $L4_26a = null;

    #[ORM\Column(name:"L4_27", type: Types::TEXT, nullable: true)]
    private ?string $L4_27 = null;

    #[ORM\Column(name:"L4_28", type: Types::TEXT, nullable: true)]
    private ?string $L4_28 = null;

    #[ORM\Column(name:"L4_29", type: Types::TEXT, nullable: true)]
    private ?string $L4_29 = null;

    #[ORM\Column(name:"L4_30", type: Types::TEXT, nullable: true)]
    private ?string $L4_30 = null;

    #[ORM\Column(name:"L4_1", type: Types::TEXT, nullable: true)]
    private ?string $L4_1 = null;

    #[ORM\Column(name:"L4_2", type: Types::TEXT, nullable: true)]
    private ?string $L4_2 = null;

    #[ORM\Column(name:"L4_3", type: Types::TEXT, nullable: true)]
    private ?string $L4_3 = null;

    #[ORM\Column(name:"L4_4", type: Types::TEXT, nullable: true)]
    private ?string $L4_4 = null;

    #[ORM\Column(name:"L4_5", type: Types::TEXT, nullable: true)]
    private ?string $L4_5 = null;

    #[ORM\Column(name:"L4_6", type: Types::TEXT, nullable: true)]
    private ?string $L4_6 = null;

    #[ORM\Column(name:"L4_6a", type: Types::TEXT, nullable: true)]
    private ?string $L4_6a = null;

    #[ORM\Column(name:"L4_7", type: Types::TEXT, nullable: true)]
    private ?string $L4_7 = null;

    #[ORM\Column(name:"L4_8", type: Types::TEXT, nullable: true)]
    private ?string $L4_8 = null;

    #[ORM\Column(name:"L4_9", length: 255, nullable: true)]
    private ?string $L4_9 = null;

    #[ORM\Column(name:"L4_10", type: Types::TEXT, nullable: true)]
    private ?string $L4_10 = null;

    #[ORM\Column(name:"L4_11", type: Types::TEXT, nullable: true)]
    private ?string $L4_11 = null;

    #[ORM\Column(name:"L4_12", type: Types::TEXT, nullable: true)]
    private ?string $L4_12 = null;

    #[ORM\Column(name:"L4_13", type: Types::TEXT, nullable: true)]
    private ?string $L4_13 = null;

    #[ORM\Column(name:"L4_13a", type: Types::TEXT, nullable: true)]
    private ?string $L4_13a = null;

    #[ORM\Column(name:"L4_14", type: Types::TEXT, nullable: true)]
    private ?string $L4_14 = null;

    #[ORM\Column(name:"L4_15", type: Types::TEXT, nullable: true)]
    private ?string $L4_15 = null;

    #[ORM\Column(name:"L4_16", type: Types::TEXT, nullable: true)]
    private ?string $L4_16 = null;

    #[ORM\Column(name:"L4_17", type: Types::TEXT, nullable: true)]
    private ?string $L4_17 = null;

    #[ORM\Column(name:"L4_18", type: Types::TEXT, nullable: true)]
    private ?string $L4_18 = null;

    #[ORM\Column(name:"L4_19", type: Types::TEXT, nullable: true)]
    private ?string $L4_19 = null;

    #[ORM\Column(name:"L4_20", type: Types::TEXT, nullable: true)]
    private ?string $L4_20 = null;

    #[ORM\Column(name:"L4_21", type: Types::TEXT, nullable: true)]
    private ?string $L4_21 = null;

    #[ORM\Column(name:"L4_22", type: Types::TEXT, nullable: true)]
    private ?string $L4_22 = null;

    #[ORM\Column(name:"L4_23", type: Types::TEXT, nullable: true)]
    private ?string $L4_23 = null;

    #[ORM\Column(name:"L4_24", type: Types::TEXT, nullable: true)]
    private ?string $L4_24 = null;

    #[ORM\Column(name:"L4_25", type: Types::TEXT, nullable: true)]
    private ?string $L4_25 = null;

    #[ORM\Column(name:"L4_31", type: Types::TEXT, nullable: true)]
    private ?string $L4_31 = null;

    #[ORM\Column(name:"L4_32", type: Types::TEXT, nullable: true)]
    private ?string $L4_32 = null;

    #[ORM\Column(name:"L4_33", type: Types::TEXT, nullable: true)]
    private ?string $L4_33 = null;

    #[ORM\Column(name:"L4_34", type: Types::TEXT, nullable: true)]
    private ?string $L4_34 = null;

    #[ORM\Column(name:"L4_35", type: Types::TEXT, nullable: true)]
    private ?string $L4_35 = null;

    #[ORM\Column(name:"L4_36", type: Types::TEXT, nullable: true)]
    private ?string $L4_36 = null;

    #[ORM\Column(name:"L4_37", type: Types::TEXT, nullable: true)]
    private ?string $L4_37 = null;

    #[ORM\Column(name:"L4_38", type: Types::TEXT, nullable: true)]
    private ?string $L4_38 = null;

    #[ORM\Column(name:"L4_39", type: Types::TEXT, nullable: true)]
    private ?string $L4_39 = null;

    #[ORM\Column(name:"L4_40", type: Types::TEXT, nullable: true)]
    private ?string $L4_40 = null;

    #[ORM\Column(name:"L4_41", type: Types::TEXT, nullable: true)]
    private ?string $L4_41 = null;

    #[ORM\Column(name:"L4_42", type: Types::TEXT, nullable: true)]
    private ?string $L4_42 = null;

    #[ORM\Column(name:"L4_43", type: Types::TEXT, nullable: true)]
    private ?string $L4_43 = null;

    #[ORM\Column(name:"L4_44", type: Types::TEXT, nullable: true)]
    private ?string $L4_44 = null;

    #[ORM\Column(name:"L4_45", type: Types::TEXT, nullable: true)]
    private ?string $L4_45 = null;

    #[ORM\Column(name:"L4_46", type: Types::TEXT, nullable: true)]
    private ?string $L4_46 = null;

    #[ORM\Column(name:"L4_47", type: Types::TEXT, nullable: true)]
    private ?string $L4_47 = null;

    #[ORM\Column(name:"L4_48", type: Types::TEXT, nullable: true)]
    private ?string $L4_48 = null;

    #[ORM\Column(name:"L4_49", type: Types::TEXT, nullable: true)]
    private ?string $L4_49 = null;

    #[ORM\Column(name:"L4_50", type: Types::TEXT, nullable: true)]
    private ?string $L4_50 = null;

    #[ORM\Column(name:"L4_51", type: Types::TEXT, nullable: true)]
    private ?string $L4_51 = null;

    #[ORM\Column(name:"L4_52", type: Types::TEXT, nullable: true)]
    private ?string $L4_52 = null;

    #[ORM\Column(name:"L4_53", type: Types::TEXT, nullable: true)]
    private ?string $L4_53 = null;

    #[ORM\Column(name:"L5_1", type: Types::TEXT, nullable: true)]
    private ?string $L5_1 = null;

    #[ORM\Column(name:"L5_2", length: 255, nullable: true)]
    private ?string $L5_2 = null;

    #[ORM\Column(name:"L5_2_autre", type: Types::TEXT, nullable: true)]
    private ?string $L5_2_autre = null;

    #[ORM\Column(name:"L5_3", type: Types::TEXT, nullable: true)]
    private ?string $L5_3 = null;

    #[ORM\Column(name:"L5_4", type: Types::TEXT, nullable: true)]
    private ?string $L5_4 = null;

    #[ORM\Column(name:"L5_5", type: Types::TEXT, nullable: true)]
    private ?string $L5_5 = null;

    #[ORM\Column(name:"L5_6", type: Types::TEXT, nullable: true)]
    private ?string $L5_6 = null;

    #[ORM\Column(name:"L5_7", type: Types::TEXT, nullable: true)]
    private ?string $L5_7 = null;

    #[ORM\Column(name:"L5_8", type: Types::TEXT, nullable: true)]
    private ?string $L5_8 = null;

    #[ORM\Column(name:"L5_9", type: Types::TEXT, nullable: true)]
    private ?string $L5_9 = null;

    #[ORM\Column(name:"L5_10", type: Types::TEXT, nullable: true)]
    private ?string $L5_10 = null;



    #[ORM\Column(name:"L6_1", length: 50, nullable: true)]
    private ?string $L6_1 = null;

    #[ORM\Column(name:"L6_2", type: Types::TEXT, nullable: true)]
    private ?string $L6_2 = null;

    #[ORM\Column(name:"L6_3", length: 50, nullable: true)]
    private ?string $L6_3 = null;

    #[ORM\Column(name:"L6_4", type: Types::TEXT, nullable: true)]
    private ?string $L6_4 = null;

    #[ORM\Column(name:"L6_4a", type: Types::TEXT, nullable: true)]
    private ?string $L6_4a = null;

    #[ORM\Column(name:"L6_5", type: Types::TEXT, nullable: true)]
    private ?string $L6_5 = null;

    #[ORM\Column(name:"L6_6", type: Types::TEXT, nullable: true)]
    private ?string $L6_6 = null;

    #[ORM\Column(name:"L7_1", type: Types::TEXT, nullable: true)]
    private ?string $L7_1 = null;

    #[ORM\Column(name:"L8_1", type: Types::TEXT, nullable: true)]
    private ?string $L8_1 = null;

    #[ORM\Column(name:"L8_2", type: Types::TEXT, nullable: true)]
    private ?string $L8_2 = null;

    #[ORM\Column(name:"L8_3", type: Types::TEXT, nullable: true)]
    private ?string $L8_3 = null;

    #[ORM\Column(name:"L9_1", type: Types::TEXT, nullable: true)]
    private ?string $L9_1 = null;

    #[ORM\Column(name:"L9_2", length: 255, nullable: true)]
    private ?string $L9_2 = null;

    #[ORM\Column(name:"L9_2a", length: 255, nullable: true)]
    private ?string $L9_2a = null;

    #[ORM\Column(name:"L9_3", type: Types::TEXT, nullable: true)]
    private ?string $L9_3 = null;

    #[ORM\Column(name:"L9_4", type: Types::TEXT, nullable: true)]
    private ?string $L9_4 = null;

    #[ORM\Column(name:"L9_5", type: Types::TEXT, nullable: true)]
    private ?string $L9_5 = null;

    #[ORM\Column(name:"L9_6", type: Types::TEXT, nullable: true)]
    private ?string $L9_6 = null;

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
        $value = $this->L1_1;

        // Ajouter une condition pour vérifier si la valeur est égale à 6
        if ($value === '1') { return 'Oui';  }
        else if ($value === '2' ) { return 'Non';  }
        return $value;
    }

    public function setL11(?string $L1_1): static
    {
        $this->L1_1 = $L1_1;

        return $this;
    }

    public function getL113(): ?string
    {
        $value = $this->L1_13;

        if ($value === '1') { return  'Biodiversité'; }
        if ($value === '2') { return 'Atténuation du changement climatique'; }
        if ($value === '3') { return  'Dégradation des sols'; }
        if ($value === '4') { return  'Gestion durable des forêts'; }
        if ($value === '5') { return  'Eaux internationales'; }
        if ($value === '6') { return 'Produits chimiques et déchets'; }
        if ($value === '7') { return 'Développement des capacités'; }
        if ($value === '8') { return  'Dialogue public société civile'; }
        if ($value === '9') { return 'Aire et patrimoine des peuples autochtones'; }
            return $value;

    }

    public function setL113(?string $L1_13): static
    {
        $this->L1_13 = $L1_13;

        return $this;
    }

    public function getL31(): ?string
    {
        return $this->L3_1;
    }

    public function setL31(?string $L3_1): static
    {
        $this->L3_1 = $L3_1;

        return $this;
    }

    public function getL32(): ?string
    {
        return $this->L3_2;
    }

    public function setL32(?string $L3_2): static
    {
        $this->L3_2 = $L3_2;

        return $this;
    }

    public function getL33(): ?string
    {
        return $this->L3_3;
    }

    public function setL33(?string $L3_3): static
    {
        $this->L3_3 = $L3_3;

        return $this;
    }

    public function getL34(): ?string
    {
        return $this->L3_4;
    }

    public function setL34(?string $L3_4): static
    {
        $this->L3_4 = $L3_4;

        return $this;
    }

    public function getL35(): ?string
    {
        return $this->L3_5;
    }

    public function setL35(?string $L3_5): static
    {
        $this->L3_5 = $L3_5;

        return $this;
    }

    public function getL36(): ?string
    {
        return $this->L3_6;
    }

    public function setL36(?string $L3_6): static
    {
        $this->L3_6 = $L3_6;

        return $this;
    }

    public function getL37(): ?string
    {
        return $this->L3_7;
    }

    public function setL37(?string $L3_7): static
    {
        $this->L3_7 = $L3_7;

        return $this;
    }

    public function getL38(): ?string
    {
        return $this->L3_8;
    }

    public function setL38(?string $L3_8): static
    {
        $this->L3_8 = $L3_8;

        return $this;
    }

    public function getL39(): ?string
    {
        return $this->L3_9;
    }

    public function setL39(?string $L3_9): static
    {
        $this->L3_9 = $L3_9;

        return $this;
    }

    public function getL310(): ?string
    {
        return $this->L3_10;
    }

    public function setL310(?string $L3_10): static
    {
        $this->L3_10 = $L3_10;

        return $this;
    }

    public function getL311(): ?string
    {
        
    $value = $this->L3_11;

    if ($value === '1') { return  'Technique'; }
    if ($value === '2') { return 'Gestion '; }
    if ($value === '3') { return  'Gouvernance'; }
    if ($value === '4') { return  'Communication'; }
    if ($value === '5') { return  'NTIC'; }
    if ($value === '77') { return 'Autres'; }
    return $value;
    }

    public function setL311(?string $L3_11): static
    {
        $this->L3_11 = $L3_11;

        return $this;
    }

    public function getL311Autre(): ?string
    {
        return $this->L3_11_autre;
    }

    public function setL311Autre(?string $L3_11_autre): static
    {
        $this->L3_11_autre = $L3_11_autre;

        return $this;
    }

    public function getL312(): ?string
    {
        return $this->L3_12;
    }

    public function setL312(?string $L3_12): static
    {
        $this->L3_12 = $L3_12;

        return $this;
    }

    public function getL313(): ?string
    {
        $value = $this->L3_13;

        // Ajouter une condition pour vérifier si la valeur est égale à 6
        if ($value === '1') { return 'Oui';  }
        else if ($value === '2' ) { return 'Non';  }
        return $value;
    }

    public function setL313(?string $L3_13): static
    {
        $this->L3_13 = $L3_13;

        return $this;
    }

    public function getL314(): ?string
    {
        return $this->L3_14;
    }

    public function setL314(?string $L3_14): static
    {
        $this->L3_14 = $L3_14;

        return $this;
    }

    public function getL315(): ?string
    {
        return $this->L3_15;
    }

    public function setL315(?string $L3_15): static
    {
        $this->L3_15 = $L3_15;

        return $this;
    }

    public function getL316(): ?string
    {
        return $this->L3_16;
    }

    public function setL316(?string $L3_16): static
    {
        $this->L3_16 = $L3_16;

        return $this;
    }

    public function getL317(): ?string
    {
        return $this->L3_17;
    }

    public function setL317(?string $L3_17): static
    {
        $this->L3_17 = $L3_17;

        return $this;
    }

    public function getL318(): ?string
    {
        $value = $this->L3_18;

        // Définir une correspondance entre les nombres et leurs libellés
        $labelMapping = [
           				'1' =>  'Humains',
						'2' =>  'Matériels',
						'3' =>  'Fournitures',
						'4' =>  'Financier',
						'77' =>  'Autres'
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

    public function setL318(?string $L3_18): static
    {
        $this->L3_18 = $L3_18;

        return $this;
    }

    public function getL318Autre(): ?string
    {
        return $this->L3_18_autre;
    }

    public function setL318Autre(?string $L3_18_autre): static
    {
        $this->L3_18_autre = $L3_18_autre;

        return $this;
    }

    public function getL319(): ?string
    {
        return $this->L3_19;
    }

    public function setL319(?string $L3_19): static
    {
        $this->L3_19 = $L3_19;

        return $this;
    }

    public function getL320(): ?string
    {
        return $this->L3_20;
    }

    public function setL320(?string $L3_20): static
    {
        $this->L3_20 = $L3_20;

        return $this;
    }

    public function getL321(): ?string
    {
        return $this->L3_21;
    }

    public function setL321(?string $L3_21): static
    {
        $this->L3_21 = $L3_21;

        return $this;
    }

    public function getL322(): ?string
    {
        $value = $this->L3_22;
        if ($value === '1') { return  'Avantages sur le plan coût '; }
        if ($value === '2') { return 'Sur le plan moyens humains '; }
        if ($value === '77') { return  'Autres'; }
        return $value;
    }

    public function setL322(?string $L3_22): static
    {
        $this->L3_22 = $L3_22;

        return $this;
    }

    public function getL322Autre(): ?string
    {
        return $this->L3_22_autre;
    }

    public function setL322Autre(?string $L3_22_autre): static
    {
        $this->L3_22_autre = $L3_22_autre;

        return $this;
    }

    public function getL323(): ?string
    {
        return $this->L3_23;
    }

    public function setL323(?string $L3_23): static
    {
        $this->L3_23 = $L3_23;

        return $this;
    }

    public function getL324(): ?string
    {
        return $this->L3_24;
    }

    public function setL324(?string $L3_24): static
    {
        $this->L3_24 = $L3_24;

        return $this;
    }

    public function getL325(): ?string
    {
        return $this->L3_25;
    }

    public function setL325(?string $L3_25): static
    {
        $this->L3_25 = $L3_25;

        return $this;
    }

    public function getL326(): ?string
    {
        return $this->L3_26;
    }

    public function setL326(?string $L3_26): static
    {
        $this->L3_26 = $L3_26;

        return $this;
    }

    public function getL327(): ?string
    {
        return $this->L3_27;
    }

    public function setL327(?string $L3_27): static
    {
        $this->L3_27 = $L3_27;

        return $this;
    }

    public function getL328(): ?string
    {
        $value = $this->L3_28;
        if ($value === '1') { return  'Humains '; }
        if ($value === '2') { return 'Matériels '; }
        if ($value === '3') { return  'Fournitures '; }
        if ($value === '4') { return  'Financier '; }
        if ($value === '77') { return  'Autres '; }
        return $value;
        
    }

    public function setL328(?string $L3_28): static
    {
        $this->L3_28 = $L3_28;

        return $this;
    }

    public function getL328Autre(): ?string
    {
        return $this->L3_28_autre;
    }

    public function setL328Autre(?string $L3_28_autre): static
    {
        $this->L3_28_autre = $L3_28_autre;

        return $this;
    }

    public function getL329(): ?string
    {
        return $this->L3_29;
    }

    public function setL329(?string $L3_29): static
    {
        $this->L3_29 = $L3_29;

        return $this;
    }

    public function getL330(): ?string
    {
        return $this->L3_30;
    }

    public function setL330(?string $L3_30): static
    {
        $this->L3_30 = $L3_30;

        return $this;
    }

    public function getL331(): ?string
    {
        return $this->L3_31;
    }

    public function setL331(?string $L3_31): static
    {
        $this->L3_31 = $L3_31;

        return $this;
    }

    public function getL332(): ?string
    {
        return $this->L3_32;
    }

    public function setL332(?string $L3_32): static
    {
        $this->L3_32 = $L3_32;

        return $this;
    }

    public function getL333(): ?string
    {
        return $this->L3_33;
    }

    public function setL333(?string $L3_33): static
    {
        $this->L3_33 = $L3_33;

        return $this;
    }

    public function getL334(): ?string
    {
        return $this->L3_34;
    }

    public function setL334(?string $L3_34): static
    {
        $this->L3_34 = $L3_34;

        return $this;
    }

    public function getL335(): ?string
    {
        return $this->L3_35;
    }

    public function setL335(?string $L3_35): static
    {
        $this->L3_35 = $L3_35;

        return $this;
    }

    public function getL336(): ?string
    {
        return $this->L3_36;
    }

    public function setL336(?string $L3_36): static
    {
        $this->L3_36 = $L3_36;

        return $this;
    }

    public function getL337(): ?string
    {
        return $this->L3_37;
    }

    public function setL337(?string $L3_37): static
    {
        $this->L3_37 = $L3_37;

        return $this;
    }

    public function getL338(): ?string
    {
        return $this->L3_38;
    }

    public function setL338(?string $L3_38): static
    {
        $this->L3_38 = $L3_38;

        return $this;
    }

    public function getL339(): ?string
    {
        return $this->L3_39;
    }

    public function setL339(?string $L3_39): static
    {
        $this->L3_39 = $L3_39;

        return $this;
    }

    public function getL340(): ?string
    {
        $value = $this->L3_40;

        // Ajouter une condition pour vérifier si la valeur est égale à 6
        if ($value === '1') { return 'Oui';  }
        else if ($value === '2' ) { return 'Non';  }
        return $value;
    }

    public function setL340(?string $L3_40): static
    {
        $this->L3_40 = $L3_40;

        return $this;
    }

    public function getL341(): ?string
    {
        return $this->L3_41;
    }

    public function setL341(?string $L3_41): static
    {
        $this->L3_41 = $L3_41;

        return $this;
    }

    public function getL342(): ?string
    {
        return $this->L3_42;
    }

    public function setL342(?string $L3_42): static
    {
        $this->L3_42 = $L3_42;

        return $this;
    }

    public function getL343(): ?string
    {
        return $this->L3_43;
    }

    public function setL343(?string $L3_43): static
    {
        $this->L3_43 = $L3_43;

        return $this;
    }

    public function getL344(): ?string
    {
        return $this->L3_44;
    }

    public function setL344(?string $L3_44): static
    {
        $this->L3_44 = $L3_44;

        return $this;
    }

    public function getL345(): ?string
    {
        $value = $this->L3_45;

        // Ajouter une condition pour vérifier si la valeur est égale à 6
        if ($value === '1') { return 'Oui';  }
        else if ($value === '2' ) { return 'Non';  }
        return $value;
    }

    public function setL345(?string $L3_45): static
    {
        $this->L3_45 = $L3_45;

        return $this;
    }

    public function getL346(): ?string
    {
        return $this->L3_46;
    }

    public function setL346(?string $L3_46): static
    {
        $this->L3_46 = $L3_46;

        return $this;
    }

    public function getL347(): ?string
    {
        return $this->L3_47;
    }

    public function setL347(?string $L3_47): static
    {
        $this->L3_47 = $L3_47;

        return $this;
    }

    public function getL348(): ?string
    {
        return $this->L3_48;
    }

    public function setL348(?string $L3_48): static
    {
        $this->L3_48 = $L3_48;

        return $this;
    }

    public function getL349(): ?string
    {
        return $this->L3_49;
    }

    public function setL349(?string $L3_49): static
    {
        $this->L3_49 = $L3_49;

        return $this;
    }

    public function getL350(): ?string
    {
        return $this->L3_50;
    }

    public function setL350(?string $L3_50): static
    {
        $this->L3_50 = $L3_50;

        return $this;
    }

    public function getL351(): ?string
    {
        return $this->L3_51;
    }

    public function setL351(?string $L3_51): static
    {
        $this->L3_51 = $L3_51;

        return $this;
    }

    public function getL352(): ?string
    {
        return $this->L3_52;
    }

    public function setL352(?string $L3_52): static
    {
        $this->L3_52 = $L3_52;

        return $this;
    }

    public function getL353(): ?string
    {
        return $this->L3_53;
    }

    public function setL353(?string $L3_53): static
    {
        $this->L3_53 = $L3_53;

        return $this;
    }

    public function getL354(): ?string
    {
        return $this->L3_54;
    }

    public function setL354(?string $L3_54): static
    {
        $this->L3_54 = $L3_54;

        return $this;
    }

    public function getL355(): ?string
    {

        $value = $this->L3_55;
        if ($value === '1') { return  'Verbal'; }
        if ($value === '2') { return 'Ecrite'; }
        if ($value === '3') { return  'Audio-visuelle'; }
        if ($value === '4') { return  'Evènementiel'; }
        if ($value === '5') { return  'A travers des us et coutume'; }
        if ($value === '77') { return  'Autres'; }
        return $value;
        
        
    }

    public function setL355(?string $L3_55): static
    {
        $this->L3_55 = $L3_55;

        return $this;
    }

    public function getL355Autre(): ?string
    {
        return $this->L3_55_autre;
    }

    public function setL355Autre(?string $L3_55_autre): static
    {
        $this->L3_55_autre = $L3_55_autre;

        return $this;
    }

    public function getL356(): ?string
    {
        return $this->L3_56;
    }

    public function setL356(?string $L3_56): static
    {
        $this->L3_56 = $L3_56;

        return $this;
    }

    public function getL357(): ?string
    {
        return $this->L3_57;
    }

    public function setL357(?string $L3_57): static
    {
        $this->L3_57 = $L3_57;

        return $this;
    }

    public function getL358(): ?string
    {
        $value = $this->L3_58;
        if ($value === '1') { return  'Marché'; }
        if ($value === '2') { return 'Lieu public'; }
        if ($value === '3') { return  'Réunion communautaire'; }
        if ($value === '4') { return  'Pratique de culte traditionnel'; }
        if ($value === '77') { return  'Autres'; }
        return $value;
    }

    public function setL358(?string $L3_58): static
    {
        $this->L3_58 = $L3_58;

        return $this;
    }

    public function getL358Autre(): ?string
    {
        return $this->L3_58_autre;
    }

    public function setL358Autre(?string $L3_58_autre): static
    {
        $this->L3_58_autre = $L3_58_autre;

        return $this;
    }

    public function getL359(): ?string
    {
        return $this->L3_59;
    }

    public function setL359(?string $L3_59): static
    {
        $this->L3_59 = $L3_59;

        return $this;
    }

    public function getL360(): ?string
    {
        return $this->L3_60;
    }

    public function setL360(?string $L3_60): static
    {
        $this->L3_60 = $L3_60;

        return $this;
    }

    public function getL361(): ?string
    {
        return $this->L3_61;
    }

    public function setL361(?string $L3_61): static
    {
        $this->L3_61 = $L3_61;

        return $this;
    }

    public function getL362(): ?string
    {
        return $this->L3_62;
    }

    public function setL362(?string $L3_62): static
    {
        $this->L3_62 = $L3_62;

        return $this;
    }

    public function getL363(): ?string
    {
        return $this->L3_63;
    }

    public function setL363(?string $L3_63): static
    {
        $this->L3_63 = $L3_63;

        return $this;
    }

    public function getL364(): ?string
    {
        return $this->L3_64;
    }

    public function setL364(?string $L3_64): static
    {
        $this->L3_64 = $L3_64;

        return $this;
    }

    public function getL365(): ?string
    {
        return $this->L3_65;
    }

    public function setL365(?string $L3_65): static
    {
        $this->L3_65 = $L3_65;

        return $this;
    }

    public function getL366(): ?string
    {
        return $this->L3_66;
    }

    public function setL366(?string $L3_66): static
    {
        $this->L3_66 = $L3_66;

        return $this;
    }

    public function getL367(): ?string
    {
        return $this->L3_67;
    }

    public function setL367(?string $L3_67): static
    {
        $this->L3_67 = $L3_67;

        return $this;
    }

    public function getL368(): ?string
    {
        $value = $this->L3_68;
        if ($value === '1') { return  'Humains '; }
        if ($value === '2') { return 'Matériels '; }
        if ($value === '3') { return  'Fournitures '; }
        if ($value === '4') { return  'Financier '; }
        if ($value === '77') { return  'Autres '; }
        return $value;
    }

    public function setL368(?string $L3_68): static
    {
        $this->L3_68 = $L3_68;

        return $this;
    }

    public function getL368Autre(): ?string
    {
        return $this->L3_68_autre;
    }

    public function setL368Autre(?string $L3_68_autre): static
    {
        $this->L3_68_autre = $L3_68_autre;

        return $this;
    }

    public function getL369(): ?string
    {
        return $this->L3_69;
    }

    public function setL369(?string $L3_69): static
    {
        $this->L3_69 = $L3_69;

        return $this;
    }

    public function getL370(): ?string
    {
        return $this->L3_70;
    }

    public function setL370(?string $L3_70): static
    {
        $this->L3_70 = $L3_70;

        return $this;
    }

    public function getL371(): ?string
    {
        return $this->L3_71;
    }

    public function setL371(?string $L3_71): static
    {
        $this->L3_71 = $L3_71;

        return $this;
    }

    public function getL372(): ?string
    {
        return $this->L3_72;
    }

    public function setL372(?string $L3_72): static
    {
        $this->L3_72 = $L3_72;

        return $this;
    }

    public function getL373(): ?string
    {
        return $this->L3_73;
    }

    public function setL373(?string $L3_73): static
    {
        $this->L3_73 = $L3_73;

        return $this;
    }

    public function getL374(): ?string
    {
        $value = $this->L3_74;

        // Ajouter une condition pour vérifier si la valeur est égale à 6
        if ($value === '1') { return 'Oui';  }
        else if ($value === '2' ) { return 'Non';  }
        return $value;
    }

    public function setL374(?string $L3_74): static
    {
        $this->L3_74 = $L3_74;

        return $this;
    }

    public function getL375(): ?string
    {
        $value = $this->L3_75;

        // Ajouter une condition pour vérifier si la valeur est égale à 6
        if ($value === '1') { return 'Oui';  }
        else if ($value === '2' ) { return 'Non';  }
        return $value;
    }

    public function setL375(?string $L3_75): static
    {
        $this->L3_75 = $L3_75;

        return $this;
    }

    public function getL376(): ?string
    {
        $value = $this->L3_76;

        // Ajouter une condition pour vérifier si la valeur est égale à 6
        if ($value === '1') { return 'Oui';  }
        else if ($value === '2' ) { return 'Non';  }
        return $value;
    }

    public function setL376(?string $L3_76): static
    {
        $this->L3_76 = $L3_76;

        return $this;
    }

    public function getL377(): ?string
    {
        $value = $this->L3_77;

        // Ajouter une condition pour vérifier si la valeur est égale à 6
        if ($value === '1') { return 'Oui';  }
        else if ($value === '2' ) { return 'Non';  }
        return $value;
    }

    public function setL377(?string $L3_77): static
    {
        $this->L3_77 = $L3_77;

        return $this;
    }

    public function getL378(): ?string
    {
        $value = $this->L3_78;

        // Ajouter une condition pour vérifier si la valeur est égale à 6
        if ($value === '1') { return 'Oui';  }
        else if ($value === '2' ) { return 'Non';  }
        return $value;
    }

    public function setL378(?string $L3_78): static
    {
        $this->L3_78 = $L3_78;

        return $this;
    }

    public function getL379(): ?string
    {
        return $this->L3_79;
    }

    public function setL379(?string $L3_79): static
    {
        $this->L3_79 = $L3_79;

        return $this;
    }


    public function getL3120(): ?string
    {
        
            $value = $this->L3_120;
            if ($value === '1') { return  'Renforcement de capacité des communautés dans le transfert de gestion des ressources naturelles (TGRN, Aires Protégées Communautaires ou APC) '; }
            if ($value === '2') { return 'Développement de fonds communautaires à travers des filières durables '; }
            if ($value === '3') { return  'Renforcement de capacité des femmes '; }
            return $value;
 
 
 
    }

    public function setL3120(?string $L3_120): static
    {
        $this->L3_120 = $L3_120;

        return $this;
    }

    public function getL3121(): ?string
    {
        
        $value = $this->L3_121;
        if ($value === '1') { return  'Formation technique'; }
        if ($value === '2') { return 'Amélioration d’accès aux ressources financières '; } 
        if ($value === '3') { return  'Amélioration de capacité pour des suivis '; }
        if ($value === '4') { return  'Amélioration de capacité pour le contrôle '; } 
        if ($value === '5') { return  'Amélioration des moyens de subsistance durable '; }
        if ($value === '77') { return  'Autres '; }
        return $value;
 
    }

    public function setL3121(?string $L3_121): static
    {
        $this->L3_121 = $L3_121;

        return $this;
    }
    public function getL3122(): ?string
    {
        return $this->L3_122;
    }

    public function setL3122(?string $L3_122): static
    {
        $this->L3_122 = $L3_122;

        return $this;
    }

    public function getL3123(): ?string
    {
        return $this->L3_123;
    }

    public function setL3123(?string $L3_123): static
    {
        $this->L3_123 = $L3_123;

        return $this;
    }

    public function getL3124(): ?string
    {
        

        $value = $this->L3_124;

        if ($value === '1') { return  'Coalitions locales axés sur les problématiques environnementales'; }
        if ($value === '2') { return 'Dialogue sur les politiques et planification entre les OSC, gouvernement et secteur privé '; }
        if ($value === '3') { return  'Genre '; }
        return $value;
        
    }

    public function setL3124(?string $L3_124): static
    {
        $this->L3_124 = $L3_124;

        return $this;
    }

    public function getL3125(): ?string
    {
        $value = $this->L3_125;

        if ($value === '1') { return  'Egalité entre homme et femme sur l’accès et  contrôle des ressources naturelles'; } 
        if ($value === '2') { return 'Participation à la prise de décision '; }
        if ($value === '3') { return  'Accès égal aux avantages '; }
        if ($value === '77') { return  'Autres'; }
        
        return $value;
        
    }

    public function setL3125(?string $L3_125): static
    {
        $this->L3_125 = $L3_125;

        return $this;
    }

    public function getL3126(): ?string
    {
        return $this->L3_126;
    }

    public function setL3126(?string $L3_126): static
    {
        $this->L3_126 = $L3_126;

        return $this;
    }

    public function getL3127(): ?string
    {
        return $this->L3_127;
    }

    public function setL3127(?string $L3_127): static
    {
        $this->L3_127 = $L3_127;

        return $this;
    }

    public function getL3128(): ?string
    {
        $value = $this->L3_128;

        if ($value === '1') { return  'Renforcement des Fokonolona quelle que soit la thématique '; }
        if ($value === '2') { return 'Accès aux financements communautaires '; }
        if ($value === '3') { return  'Mise en place de fonds communautaires '; }
        return $value;
        
        
    }

    public function setL3128(?string $L3_128): static
    {
        $this->L3_128 = $L3_128;

        return $this;
    }

    public function getL3129(): ?string
    {
        return $this->L3_129;
    }

    public function setL3129(?string $L3_129): static
    {
        $this->L3_129 = $L3_129;

        return $this;
    }



    public function getL380(): ?string
    {
        $value = $this->L3_80;

        // Définir une correspondance entre les nombres et leurs libellés
        $labelMapping = [
           			
						'1' =>  'Fokonolona',
						'2' =>  'COBA',
						'3' =>  'Coopérative',
						'4' =>  'OSC',
						'5' =>  'OSC Fédératives',
						'6' =>  'STD',
						'7' =>  'CTD',
						'8' =>  'LMMA',
						'9' =>  'Secteur privé',
						'77' =>  'Autres à préciser'
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

    public function setL380(?string $L3_80): static
    {
        $this->L3_80 = $L3_80;

        return $this;
    }

    public function getL381(): ?string
    {
        return $this->L3_81;
    }

    public function setL381(?string $L3_81): static
    {
        $this->L3_81 = $L3_81;

        return $this;
    }

    public function getL382(): ?int
    {
        return $this->L3_82;
    }

    public function setL382(?int $L3_82): static
    {
        $this->L3_82 = $L3_82;

        return $this;
    }

    public function getL383(): ?string
    {
        return $this->L3_83;
    }

    public function setL383(?string $L3_83): static
    {
        $this->L3_83 = $L3_83;

        return $this;
    }

    public function getL384(): ?string
    {
        return $this->L3_84;
    }

    public function setL384(?string $L3_84): static
    {
        $this->L3_84 = $L3_84;

        return $this;
    }

    public function getL385(): ?int
    {
        return $this->L3_85;
    }

    public function setL385(?int $L3_85): static
    {
        $this->L3_85 = $L3_85;

        return $this;
    }

    public function getL386(): ?int
    {
        return $this->L3_86;
    }

    public function setL386(?int $L3_86): static
    {
        $this->L3_86 = $L3_86;

        return $this;
    }

    public function getL387(): ?int
    {
        return $this->L3_87;
    }

    public function setL387(?int $L3_87): static
    {
        $this->L3_87 = $L3_87;

        return $this;
    }

    public function getL388(): ?int
    {
        return $this->L3_88;
    }

    public function setL388(?int $L3_88): static
    {
        $this->L3_88 = $L3_88;

        return $this;
    }

    public function getL389(): ?string
    {
        return $this->L3_89;
    }

    public function setL389(?string $L3_89): static
    {
        $this->L3_89 = $L3_89;

        return $this;
    }

    public function getL390(): ?string
    {
        return $this->L3_90;
    }

    public function setL390(?string $L3_90): static
    {
        $this->L3_90 = $L3_90;

        return $this;
    }

    public function getL391(): ?int
    {
        return $this->L3_91;
    }

    public function setL391(?int $L3_91): static
    {
        $this->L3_91 = $L3_91;

        return $this;
    }

    public function getL392(): ?string
    {
        return $this->L3_92;
    }

    public function setL392(?string $L3_92): static
    {
        $this->L3_92 = $L3_92;

        return $this;
    }

    public function getL393(): ?int
    {
        return $this->L3_93;
    }

    public function setL393(?int $L3_93): static
    {
        $this->L3_93 = $L3_93;

        return $this;
    }

    public function getL394(): ?int
    {
        return $this->L3_94;
    }

    public function setL394(?int $L3_94): static
    {
        $this->L3_94 = $L3_94;

        return $this;
    }

    public function getL395(): ?int
    {
        return $this->L3_95;
    }

    public function setL395(?int $L3_95): static
    {
        $this->L3_95 = $L3_95;

        return $this;
    }

    public function getL396(): ?int
    {
        return $this->L3_96;
    }

    public function setL396(?int $L3_96): static
    {
        $this->L3_96 = $L3_96;

        return $this;
    }

    public function getL397(): ?string
    {
        return $this->L3_97;
    }

    public function setL397(?string $L3_97): static
    {
        $this->L3_97 = $L3_97;

        return $this;
    }

    public function getL398(): ?string
    {
        return $this->L3_98;
    }

    public function setL398(?string $L3_98): static
    {
        $this->L3_98 = $L3_98;

        return $this;
    }

    public function getL399(): ?string
    {
        return $this->L3_99;
    }

    public function setL399(?string $L3_99): static
    {
        $this->L3_99 = $L3_99;

        return $this;
    }

    public function getL3100(): ?int
    {
        return $this->L3_100;
    }

    public function setL3100(?int $L3_100): static
    {
        $this->L3_100 = $L3_100;

        return $this;
    }

    public function getL3101(): ?int
    {
        return $this->L3_101;
    }

    public function setL3101(?int $L3_101): static
    {
        $this->L3_101 = $L3_101;

        return $this;
    }

    public function getL3102(): ?int
    {
        return $this->L3_102;
    }

    public function setL3102(?int $L3_102): static
    {
        $this->L3_102 = $L3_102;

        return $this;
    }

    public function getL3103(): ?string
    {
        return $this->L3_103;
    }

    public function setL3103(?string $L3_103): static
    {
        $this->L3_103 = $L3_103;

        return $this;
    }

    public function getL3104(): ?string
    {
        return $this->L3_104;
    }

    public function setL3104(?string $L3_104): static
    {
        $this->L3_104 = $L3_104;

        return $this;
    }

    public function getL3105(): ?string
    {
        return $this->L3_105;
    }

    public function setL3105(?string $L3_105): static
    {
        $this->L3_105 = $L3_105;

        return $this;
    }

    public function getL3106(): ?string
    {
        return $this->L3_106;
    }

    public function setL3106(?string $L3_106): static
    {
        $this->L3_106 = $L3_106;

        return $this;
    }

    public function getL3107(): ?string
    {
        return $this->L3_107;
    }

    public function setL3107(?string $L3_107): static
    {
        $this->L3_107 = $L3_107;

        return $this;
    }

    public function getL3108(): ?string
    {
        return $this->L3_108;
    }

    public function setL3108(?string $L3_108): static
    {
        $this->L3_108 = $L3_108;

        return $this;
    }

    public function getL3109(): ?string
    {
        return $this->L3_109;
    }

    public function setL3109(?string $L3_109): static
    {
        $this->L3_109 = $L3_109;

        return $this;
    }

    public function getL3110(): ?string
    {
        return $this->L3_110;
    }

    public function setL3110(?string $L3_110): static
    {
        $this->L3_110 = $L3_110;

        return $this;
    }

    public function getL3111(): ?string
    {
        return $this->L3_111;
    }

    public function setL3111(?string $L3_111): static
    {
        $this->L3_111 = $L3_111;

        return $this;
    }

    public function getL3112(): ?string
    {
        return $this->L3_112;
    }

    public function setL3112(?string $L3_112): static
    {
        $this->L3_112 = $L3_112;

        return $this;
    }

    public function getL3113(): ?string
    {
        return $this->L3_113;
    }

    public function setL3113(?string $L3_113): static
    {
        $this->L3_113 = $L3_113;

        return $this;
    }

    public function getL3114(): ?string
    {
        return $this->L3_114;
    }

    public function setL3114(?string $L3_114): static
    {
        $this->L3_114 = $L3_114;

        return $this;
    }

    public function getL3115(): ?string
    {
        return $this->L3_115;
    }

    public function setL3115(?string $L3_115): static
    {
        $this->L3_115 = $L3_115;

        return $this;
    }

    public function getL3116(): ?string
    {
        return $this->L3_116;
    }

    public function setL3116(?string $L3_116): static
    {
        $this->L3_116 = $L3_116;

        return $this;
    }

    public function getL3117(): ?string
    {
        $value = $this->L3_117;

        // Définir une correspondance entre les nombres et leurs libellés
        $labelMapping = [
           				'1' =>  'Gouvernorat',
						'2' =>  'Bureau exécutif',
						'3' =>  'Conseil communal',
						'77' =>  'Autres à préciser'

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

    public function setL3117(?string $L3_117): static
    {
        $this->L3_117 = $L3_117;

        return $this;
    }

    

    public function getL3118(): ?string
    {
        return $this->L3_118;
    }

    public function setL3118(?string $L3_118): static
    {
        $this->L3_118 = $L3_118;

        return $this;
    }

    public function getL3117Autre(): ?string
    {
        return $this->L3_117_autre;
    }

    public function setL3117Autre(?string $L3_117_autre): static
    {
        $this->L3_117_autre = $L3_117_autre;

        return $this;
    }

    public function getL3130(): ?string
    {
        return $this->L3_130;
    }

    public function setL3130(?string $L3_130): static
    {
        $this->L3_130 = $L3_130;

        return $this;
    }

    public function getL3131(): ?string
    {
        return $this->L3_131;
    }

    public function setL3131(?string $L3_131): static
    {
        $this->L3_131 = $L3_131;

        return $this;
    }

    public function getL3119(): ?string
    {
        return $this->L3_119;
    }

    public function setL3119(?string $L3_119): static
    {
        $this->L3_119 = $L3_119;

        return $this;
    }

    public function getL426(): ?string
    {
        return $this->L4_26;
    }

    public function setL426(?string $L4_26): static
    {
        $this->L4_26 = $L4_26;

        return $this;
    }

    public function getL426a(): ?string
    {
        $value = $this->L4_26a;

        // Ajouter une condition pour vérifier si la valeur est égale à 6
        if ($value === '1') { return 'Oui';  }
        else if ($value === '2' ) { return 'Non';  }
        return $value;
    }

    public function setL426a(?string $L4_26a): static
    {
        $this->L4_26a = $L4_26a;

        return $this;
    }

    public function getL427(): ?string
    {
        return $this->L4_27;
    }

    public function setL427(?string $L4_27): static
    {
        $this->L4_27 = $L4_27;

        return $this;
    }

    public function getL428(): ?string
    {
        return $this->L4_28;
    }

    public function setL428(?string $L4_28): static
    {
        $this->L4_28 = $L4_28;

        return $this;
    }

    public function getL429(): ?string
    {
        $value = $this->L4_29;

        // Ajouter une condition pour vérifier si la valeur est égale à 6
        if ($value === '1') { return 'Oui';  }
        else if ($value === '2' ) { return 'Non';  }
        return $value;
    }

    public function setL429(?string $L4_29): static
    {
        $this->L4_29 = $L4_29;

        return $this;
    }

    public function getL430(): ?string
    {
        return $this->L4_30;
    }

    public function setL430(?string $L4_30): static
    {
        $this->L4_30 = $L4_30;

        return $this;
    }



    public function getL41(): ?string
    {
        return $this->L4_1;
    }

    public function setL41(?string $L4_1): static
    {
        $this->L4_1 = $L4_1;

        return $this;
    }

    public function getL42(): ?string
    {
        $value = $this->L4_2;

        // Ajouter une condition pour vérifier si la valeur est égale à 6
        if ($value === '1') { return 'Oui';  }
        else if ($value === '2' ) { return 'Non';  }
        return $value;
    }

    public function setL42(?string $L4_2): static
    {
        $this->L4_2 = $L4_2;

        return $this;
    }

    public function getL43(): ?string
    {
        return $this->L4_3;
    }

    public function setL43(?string $L4_3): static
    {
        $this->L4_3 = $L4_3;

        return $this;
    }

    public function getL44(): ?string
    {
        return $this->L4_4;
    }

    public function setL44(?string $L4_4): static
    {
        $this->L4_4 = $L4_4;

        return $this;
    }

    public function getL45(): ?string
    {
        return $this->L4_5;
    }

    public function setL45(?string $L4_5): static
    {
        $this->L4_5 = $L4_5;

        return $this;
    }

    public function getL46(): ?string
    {
        return $this->L4_6;
    }

    public function setL46(?string $L4_6): static
    {
        $this->L4_6 = $L4_6;

        return $this;
    }

    public function getL46a(): ?string
    {
        $value = $this->L4_6a;

        // Ajouter une condition pour vérifier si la valeur est égale à 6
        if ($value === '1') { return 'Oui';  }
        else if ($value === '2' ) { return 'Non';  }
        return $value;
    }

    public function setL46a(?string $L4_6a): static
    {
        $this->L4_6a = $L4_6a;

        return $this;
    }

    public function getL47(): ?string
    {
        return $this->L4_7;
    }

    public function setL47(?string $L4_7): static
    {
        $this->L4_7 = $L4_7;

        return $this;
    }

    public function getL48(): ?string
    {
        return $this->L4_8;
    }

    public function setL48(?string $L4_8): static
    {
        $this->L4_8 = $L4_8;

        return $this;
    }

    public function getL49(): ?string
    {
        $value = $this->L4_9;

        // Ajouter une condition pour vérifier si la valeur est égale à 6
        if ($value === '1') { return 'Oui';  }
        else if ($value === '2' ) { return 'Non';  }
        return $value;
    }

    public function setL49(?string $L4_9): static
    {
        $this->L4_9 = $L4_9;

        return $this;
    }

    public function getL410(): ?string
    {
        return $this->L4_10;
    }

    public function setL410(?string $L4_10): static
    {
        $this->L4_10 = $L4_10;

        return $this;
    }

    public function getL411(): ?string
    {
        return $this->L4_11;
    }

    public function setL411(?string $L4_11): static
    {
        $this->L4_11 = $L4_11;

        return $this;
    }

    public function getL412(): ?string
    {
        return $this->L4_12;
    }

    public function setL412(?string $L4_12): static
    {
        $this->L4_12 = $L4_12;

        return $this;
    }

    public function getL413(): ?string
    {
        return $this->L4_13;
    }

    public function setL413(?string $L4_13): static
    {
        $this->L4_13 = $L4_13;

        return $this;
    }
    public function getL413a(): ?string
    {
        return $this->L4_13a;
    }

    public function setL413a(?string $L4_13a): static
    {
        $this->L4_13a = $L4_13a;

        return $this;
    }

    public function getL414(): ?string
    {
        return $this->L4_14;
    }

    public function setL414(?string $L4_14): static
    {
        $this->L4_14 = $L4_14;

        return $this;
    }

    public function getL415(): ?string
    {
        return $this->L4_15;
    }

    public function setL415(?string $L4_15): static
    {
        $this->L4_15 = $L4_15;

        return $this;
    }

    public function getL416(): ?string
    {
        return $this->L4_16;
    }

    public function setL416(?string $L4_16): static
    {
        $this->L4_16 = $L4_16;

        return $this;
    }

    public function getL417(): ?string
    {
        return $this->L4_17;
    }

    public function setL417(?string $L4_17): static
    {
        $this->L4_17 = $L4_17;

        return $this;
    }

    public function getL418(): ?string
    {
        return $this->L4_18;
    }

    public function setL418(?string $L4_18): static
    {
        $this->L4_18 = $L4_18;

        return $this;
    }

    public function getL419(): ?string
    {
        return $this->L4_19;
    }

    public function setL419(?string $L4_19): static
    {
        $this->L4_19 = $L4_19;

        return $this;
    }

    public function getL420(): ?string
    {
        return $this->L4_20;
    }

    public function setL420(?string $L4_20): static
    {
        $this->L4_20 = $L4_20;

        return $this;
    }

    public function getL421(): ?string
    {
        return $this->L4_21;
    }

    public function setL421(?string $L4_21): static
    {
        $this->L4_21 = $L4_21;

        return $this;
    }

    public function getL422(): ?string
    {
        return $this->L4_22;
    }

    public function setL422(?string $L4_22): static
    {
        $this->L4_22 = $L4_22;

        return $this;
    }

    public function getL423(): ?string
    {
        return $this->L4_23;
    }

    public function setL423(?string $L4_23): static
    {
        $this->L4_23 = $L4_23;

        return $this;
    }

    public function getL424(): ?string
    {
        return $this->L4_24;
    }

    public function setL424(?string $L4_24): static
    {
        $this->L4_24 = $L4_24;

        return $this;
    }

    public function getL425(): ?string
    {
        return $this->L4_25;
    }

    public function setL425(?string $L4_25): static
    {
        $this->L4_25 = $L4_25;

        return $this;
    }

    public function getL431(): ?string
    {
        return $this->L4_31;
    }

    public function setL431(?string $L4_31): static
    {
        $this->L4_31 = $L4_31;

        return $this;
    }

    public function getL432(): ?string
    {
        return $this->L4_32;
    }

    public function setL432(?string $L4_32): static
    {
        $this->L4_32 = $L4_32;

        return $this;
    }

    public function getL433(): ?string
    {
        return $this->L4_33;
    }

    public function setL433(?string $L4_33): static
    {
        $this->L4_33 = $L4_33;

        return $this;
    }

    public function getL434(): ?string
    {
        return $this->L4_34;
    }

    public function setL434(?string $L4_34): static
    {
        $this->L4_34 = $L4_34;

        return $this;
    }

    public function getL435(): ?string
    {
        return $this->L4_35;
    }

    public function setL435(?string $L4_35): static
    {
        $this->L4_35 = $L4_35;

        return $this;
    }

    public function getL436(): ?string
    {
        return $this->L4_36;
    }

    public function setL436(?string $L4_36): static
    {
        $this->L4_36 = $L4_36;

        return $this;
    }

    public function getL437(): ?string
    {
        return $this->L4_37;
    }

    public function setL437(?string $L4_37): static
    {
        $this->L4_37 = $L4_37;

        return $this;
    }

    public function getL438(): ?string
    {
        return $this->L4_38;
    }

    public function setL438(?string $L4_38): static
    {
        $this->L4_38 = $L4_38;

        return $this;
    }

    public function getL439(): ?string
    {
        return $this->L4_39;
    }

    public function setL439(?string $L4_39): static
    {
        $this->L4_39 = $L4_39;

        return $this;
    }

    public function getL440(): ?string
    {
        return $this->L4_40;
    }

    public function setL440(?string $L4_40): static
    {
        $this->L4_40 = $L4_40;

        return $this;
    }

    public function getL441(): ?string
    {
        return $this->L4_41;
    }

    public function setL441(?string $L4_41): static
    {
        $this->L4_41 = $L4_41;

        return $this;
    }

    public function getL442(): ?string
    {
        return $this->L4_42;
    }

    public function setL442(?string $L4_42): static
    {
        $this->L4_42 = $L4_42;

        return $this;
    }

    public function getL443(): ?string
    {
        return $this->L4_43;
    }

    public function setL443(?string $L4_43): static
    {
        $this->L4_43 = $L4_43;

        return $this;
    }

    public function getL444(): ?string
    {
        return $this->L4_44;
    }

    public function setL444(?string $L4_44): static
    {
        $this->L4_44 = $L4_44;

        return $this;
    }

    public function getL445(): ?string
    {
        return $this->L4_45;
    }

    public function setL445(?string $L4_45): static
    {
        $this->L4_45 = $L4_45;

        return $this;
    }

    public function getL446(): ?string
    {
        return $this->L4_46;
    }

    public function setL446(?string $L4_46): static
    {
        $this->L4_46 = $L4_46;

        return $this;
    }

    public function getL447(): ?string
    {
        return $this->L4_47;
    }

    public function setL447(?string $L4_47): static
    {
        $this ->L4_47 = $L4_47;

        return $this;
    }
    public function getL448(): ?string
    {
        return $this->L4_48;
    }

    public function setL448(?string $L4_48): static
    {
        $this->L4_48 = $L4_48;

        return $this;
    }

    public function getL449(): ?string
    {
        return $this->L4_49;
    }

    public function setL449(?string $L4_49): static
    {
        $this->L4_49 = $L4_49;

        return $this;
    }

    public function getL450(): ?string
    {
        return $this->L4_50;
    }

    public function setL450(?string $L4_50): static
    {
        $this->L4_50 = $L4_50;

        return $this;
    }

    public function getL451(): ?string
    {
        return $this->L4_51;
    }

    public function setL451(?string $L4_51): static
    {
        $this->L4_51 = $L4_51;

        return $this;
    }

    public function getL452(): ?string
    {
        return $this->L4_52;
    }

    public function setL452(?string $L4_52): static
    {
        $this->L4_52 = $L4_52;

        return $this;
    }

    public function getL453(): ?string
    {
        return $this->L4_53;
    }

    public function setL453(?string $L4_53): static
    {
        $this->L4_53 = $L4_53;

        return $this;
    }


    public function getL51(): ?string
    {
        return $this->L5_1;
    }

    public function setL51(?string $L5_1): static
    {
        $this->L5_1 = $L5_1;

        return $this;
    }

    public function getL52(): ?string
    {
        $value = $this->L5_2;

        // Définir une correspondance entre les nombres et leurs libellés
        $labelMapping = [
           				
				'1' =>  'Nouvel attitude',
				'2' =>  'Nouveaux comportements',
				'3' =>  'Nouvelles modalités de travail',
				'4' =>  'Nouvelles organisations',
				'5' =>  'Nouvelles méthodes adoptées',
				'6' =>  'Nouvel texte',
				'77' =>  'Autres'

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

    public function setL52(?string $L5_2): static
    {
        $this->L5_2 = $L5_2;

        return $this;
    }

    public function getL52Autre(): ?string
    {
        return $this->L5_2_autre;
    }

    public function setL52Autre(?string $L5_2_autre): static
    {
        $this->L5_2_autre = $L5_2_autre;

        return $this;
    }

    public function getL53(): ?string
    {
        return $this->L5_3;
    }

    public function setL53(?string $L5_3): static
    {
        $this->L5_3 = $L5_3;

        return $this;
    }

    public function getL54(): ?string
    {
        return $this->L5_4;
    }

    public function setL54(?string $L5_4): static
    {
        $this->L5_4 = $L5_4;

        return $this;
    }

    public function getL55(): ?string
    {
        return $this->L5_5;
    }

    public function setL55(?string $L5_5): static
    {
        $this->L5_5 = $L5_5;

        return $this;
    }

    public function getL56(): ?string
    {
        return $this->L5_6;
    }

    public function setL56(?string $L5_6): static
    {
        $this->L5_6 = $L5_6;

        return $this;
    }

    public function getL57(): ?string
    {
        return $this->L5_7;
    }

    public function setL57(?string $L5_7): static
    {
        $this->L5_7 = $L5_7;

        return $this;
    }

    public function getL58(): ?string
    {
        return $this->L5_8;
    }

    public function setL58(?string $L5_8): static
    {
        $this->L5_8 = $L5_8;

        return $this;
    }

    public function getL59(): ?string
    {
        return $this->L5_9;
    }

    public function setL59(?string $L5_9): static
    {
        $this->L5_9 = $L5_9;

        return $this;
    }

    public function getL510(): ?string
    {
        return $this->L5_10;
    }

    public function setL510(?string $L5_10): static
    {
        $this->L5_10 = $L5_10;

        return $this;
    }

    public function getL61(): ?string
    {
        $value = $this->L6_1;

        // Ajouter une condition pour vérifier si la valeur est égale à 6
        if ($value === '1') { return 'Oui';  }
        else if ($value === '2' ) { return 'Non';  }
        return $value;
    }

    public function setL61(?string $L6_1): static
    {
        $this->L6_1 = $L6_1;

        return $this;
    }

    public function getL62(): ?string
    {
        return $this->L6_2;
    }

    public function setL62(?string $L6_2): static
    {
        $this->L6_2 = $L6_2;

        return $this;
    }

    public function getL63(): ?string
    {
        $value = $this->L6_3;

        // Ajouter une condition pour vérifier si la valeur est égale à 6
        if ($value === '1') { return 'Oui';  }
        else if ($value === '2' ) { return 'Non';  }
        return $value;
    }

    public function setL63(?string $L6_3): static
    {
        $this->L6_3 = $L6_3;

        return $this;
    }

    public function getL64(): ?string
    {
        return $this->L6_4;
    }

    public function setL64(?string $L6_4): static
    {
        $this->L6_4 = $L6_4;

        return $this;
    }

    public function getL64a(): ?string
    {
        return $this->L6_4a;
    }

    public function setL64a(?string $L6_4a): static
    {
        $this->L6_4a = $L6_4a;

        return $this;
    }

    public function getL65(): ?string
    {
        return $this->L6_5;
    }

    public function setL65(?string $L6_5): static
    {
        $this->L6_5 = $L6_5;

        return $this;
    }

    public function getL66(): ?string
    {
        return $this->L6_6;
    }

    public function setL66(?string $L6_6): static
    {
        $this->L6_6 = $L6_6;

        return $this;
    }

    public function getL71(): ?string
    {
        return $this->L7_1;
    }

    public function setL71(?string $L7_1): static
    {
        $this->L7_1 = $L7_1;

        return $this;
    }

    public function getL81(): ?string
    {
        return $this->L8_1;
    }

    public function setL81(?string $L8_1): static
    {
        $this->L8_1 = $L8_1;

        return $this;
    }

    public function getL82(): ?string
    {
        return $this->L8_2;
    }

    public function setL82(?string $L8_2): static
    {
        $this->L8_2 = $L8_2;

        return $this;
    }

    public function getL83(): ?string
    {
        return $this->L8_3;
    }

    public function setL83(?string $L8_3): static
    {
        $this->L8_3 = $L8_3;

        return $this;
    }

    public function getL91(): ?string
    {
        return $this->L9_1;
    }

    public function setL91(?string $L9_1): static
    {
        $this->L9_1 = $L9_1;

        return $this;
    }

    public function getL92(): ?string
    {
        $value = $this->L9_2;

        // Définir une correspondance entre les nombres et leurs libellés
        $labelMapping = [
           				
				'1' =>  'Sous forme écrite',
				'2' =>  'Audio-visuelle',
				'3' =>  'Démonstration',
				'4' =>  'Formation',
				'5' =>  'Communication',
				'6' =>  'Rituelle',
				'77' =>  'Autres'

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

    public function setL92(?string $L9_2): static
    {
        $this->L9_2 = $L9_2;

        return $this;
    }

    public function getL92a(): ?string
    {
        return $this->L9_2a;
    }

    public function setL92a(?string $L9_2a): static
    {
        $this->L9_2a = $L9_2a;

        return $this;
    }

    public function getL93(): ?string
    {
        return $this->L9_3;
    }

    public function setL93(?string $L9_3): static
    {
        $this->L9_3 = $L9_3;

        return $this;
    }

    public function getL94(): ?string
    {
        return $this->L9_4;
    }

    public function setL94(?string $L9_4): static
    {
        $this->L9_4 = $L9_4;

        return $this;
    }

    public function getL95(): ?string
    {
        return $this->L9_5;
    }

    public function setL95(?string $L9_5): static
    {
        $this->L9_5 = $L9_5;

        return $this;
    }

    public function getL96(): ?string
    {
        return $this->L9_6;
    }

    public function setL96(?string $L9_6): static
    {
        $this->L9_6 = $L9_6;

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
