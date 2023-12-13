<?php

namespace App\Form;

use App\Entity\CapitalisationPartI;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CapitalisationPartIType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('A1' , null, ['label' => 'A1-Titre du projet  ',])
            ->add('A5' , null, ['label' => 'A5-Région d\'intervention ',])
            ->add('A10' , null, ['label' => 'A10-Projet No.',])
            ->add('A10a' , null, ['label' => 'A10a-Projet No. Pour Confirmation.',])
            ->add('A11' , null, ['label' => 'A11-Fonds',])
            ->add('A12' , null, ['label' => 'A12-Phases',])
            ->add('A13' , null, ['label' => 'A13-Paysages',])
            ->add('A19' , null, ['label' => 'A19-Domaine d\'intervention',])
            ->add('A33' , null, ['label' => 'A33-Année de remplissage de l\'outils',])
            ->add('A34' , null, ['label' => 'A34-Numero trimestre',])
            ->add('L1_1' , null, ['label' => 'L1_1-Y-a-t il de bonne pratique pendant la mise en œuvre du projet?',])
            ->add('L1_2' , null, ['label' => 'L1_2-Où s’est déroulée l’expérience ? (Région)',])
            ->add('L1_3' , null, ['label' => 'L1_3-Où s’est déroulée l’expérience ? (District)',])
            ->add('L1_4' , null, ['label' => 'L1_4-Où s’est déroulée l’expérience ? (Commune)',])
            ->add('L1_5' , null, ['label' => 'L1_5-Où s’est déroulée l’expérience ? (Fokontany)',])
            ->add('L1_6' , null, ['label' => 'L1_6-Où est la localisation de la zone ?',])
            ->add('L1_7' , null, ['label' => 'L1_7-Paysage',])
            ->add('L1_8' , null, ['label' => 'L1_8-Si paysage potentiel, dans quels régions?',])
            ->add('L1_9' , null, ['label' => 'L1_9-Quel est le type de la Zone protégé?',])
            ->add('L1_9_autre' , null, ['label' => 'L1_9_autre-Si autre',])
            ->add('L1_10' , null, ['label' => 'L1_10-Si terrestre, quel type?',])
            ->add('L1_11' , null, ['label' => 'L1_11-Si marin, quel type?',])
            ->add('L1_11a' , null, ['label' => 'L1_11a-S’agit-il d’un Aire et Territoire de Patrimoine Autochtone et Communautaire ( APAC)?',])
            ->add('L1_12' , null, ['label' => 'L1_12-Quel est le titre de la bonne pratique?',])
            ->add('L1_13' , null, ['label' => 'L1_13-Décrire le domaine thématique de la bonne pratique? ',])
            ->add('L1_14' , null, ['label' => 'L1_14-Décrire une brève historique de la communauté ou de l’acteur détenteur de la bonne pratique : histoire qui a amené à l’existence de la communauté ou de l’acteur au niveau de la zone, évolution de l’historique en général avec des faits marquants liés à l’évolution de la pratique ou comment la bonne pratique a évolué jusqu’à son état actuel?',])
            ->add('L1_15' , null, ['label' => 'L1_15-La construction de la bonne pratique a pris combien de temps ( nombre d’année  ou de mois)?',])
            ->add('L1_16' , null, ['label' => 'L1_16-Décrire le Contexte et historique de l’initiative qui a fait naître la bonne pratique ou la réussite (Résumé)',])
            ->add('L1_17' , null, ['label' => 'L1_17-Est-ce que la zone fait partie d’une aire protégée ?',])
            ->add('L1_18' , null, ['label' => 'L1_18-Laquelle?',])
            ->add('L1_19' , null, ['label' => 'L1_19-Quelle catégorie d’aire protégée d’UICN',])
            ->add('L1_20' , null, ['label' => 'L1_20-Est-ce qu’il y a un gestionnaire agrée par l’Etat? ',])
            ->add('L1_21' , null, ['label' => 'L1_21-Lequel ?',])
            ->add('L1_21_autre' , null, ['label' => 'L1_21_autre-Si autre',])
            ->add('L1_22' , null, ['label' => 'L1_22-Donner la caractéristique de la zone protégée?',])
            ->add('L1_22_autre' , null, ['label' => 'L1_22_autre-Si autre',])
            ->add('L1_23' , null, ['label' => 'L1_23-Est-ce que la bonne pratique touche une ou des espèces endémiques spécifiques, lesquels ?',])
            ->add('L1_23_autre' , null, ['label' => 'L1_23a -Lesquels  ?',])
            ->add('L1_24' , null, ['label' => 'L1_24-Est-ce que ce sont des espèces figurées dans la liste rouge d’UICN ?',])
            ->add('L1_25a' , null, ['label' => 'L1_25a-relief',])
            ->add('L1_25b' , null, ['label' => 'L1_25b-climat',])
            ->add('L1_25c' , null, ['label' => 'L1_25c-type de sol',])
            ->add('L1_25d' , null, ['label' => 'L1_25d-hydrographie',])
            ->add('L1_25e' , null, ['label' => 'L1_25e-dunes',])
            ->add('L1_25f' , null, ['label' => 'L1_25f-bassin versant ',])
            ->add('L1_26a' , null, ['label' => 'L1_26a-délimitation',])
            ->add('L1_26b' , null, ['label' => 'L1_26b-superficie approximative',])
            ->add('L1_26c' , null, ['label' => 'L1_26c-son enjeux par rapport au paysage ou une partie du paysage ',])
            ->add('L1_27' , null, ['label' => 'L1_27-Mettre en exergue les effets de changement climatique visible sur le terrain',])
            ->add('L1_28' , null, ['label' => 'L1_28-Est-ce que la zone fait partie d’une aire protégée ?',])
            ->add('L1_29' , null, ['label' => 'L1_29-Laquelle?',])
            ->add('L1_30' , null, ['label' => 'L1_30-Quelle catégorie d’aire protégée d’UICN',])
            ->add('L1_31' , null, ['label' => 'L1_31-Est-ce que la zone fait partie d’un bassin versant?',])
            ->add('L1_32' , null, ['label' => 'L1_32-Lequel ?',])
            ->add('L1_33' , null, ['label' => 'L1_33-Est-ce que la zone fait partie d’un système de production ?',])
            ->add('L1_34' , null, ['label' => 'L1_34-Lequel?',])
            ->add('L1_35' , null, ['label' => 'L1_35-Décrire le réseau hydrographique de la zone (Noms des rivières, …)',])
            ->add('L1_36' , null, ['label' => 'L1_36-Décrire l’enjeu de la zone par rapport à l’ensemble du bassin versant ',])
            ->add('L1_37' , null, ['label' => 'L1_37-Quels sont les types de sols?',])
            ->add('L1_38' , null, ['label' => 'L1_38-Quels problèmes liés à la dégradation apparus ?',])
            ->add('L1_39' , null, ['label' => 'L1_39-Quelle menace si la bonne pratique n’a pas été prise? ',])
            ->add('L1_40' , null, ['label' => 'L1_40-Est-ce que la zone fait partie d’une aire protégée ?',])
            ->add('L1_41' , null, ['label' => 'L1_41-Laquelle?',])
            ->add('L1_42' , null, ['label' => 'L1_42-Quelle catégorie d’aire protégée d’UICN',])
            ->add('L1_43' , null, ['label' => 'L1_43-Est-ce que la zone fait partie du site RAMSAR ?',])
            ->add('L1_44' , null, ['label' => 'L1_44-Est-ce que la bonne pratique touche un ou des espèces endémiques en faune ou flore marine? ',])
            ->add('L1_45' , null, ['label' => 'L1_45-Lesquels ( noms vernaculaires et noms scientifiques)?',])
            ->add('L1_46' , null, ['label' => 'L1_46-Est-ce que ces espèces font partie de la liste rouge de UICN',])
            ->add('L1_47' , null, ['label' => 'L1_47-Est-ce que la zone fait partie d’un bassin versant? ',])
            ->add('L1_48' , null, ['label' => 'L1_48-Lequel?',])
            ->add('L1_49' , null, ['label' => 'L1_49-Décrire l’eau touchée par la bonne pratique : ',])
            ->add('L1_49_autre' , null, ['label' => 'L1_49_autre-Si autre ?',])
            ->add('L1_50' , null, ['label' => 'L1_50-Pour les côtes : décrire la longueur?',])
            ->add('L1_51' , null, ['label' => 'L1_51-Décrire les espèces dominantes en faune et en flore?',])
            ->add('L1_52' , null, ['label' => 'L1_52-Décrire les caractéristiques de la côte?',])
            ->add('L1_52_autre' , null, ['label' => 'L1_52_autre-Si autre',])
            ->add('L1_53' , null, ['label' => 'L1_53-Décrire son enjeu par rapport au paysage?',])
            ->add('L1_54' , null, ['label' => 'L1_54-Quels sont les produits chimiques polluants?',])
            ->add('L1_55' , null, ['label' => 'L1_55-Faite une description scientifique (si possible) du produit : formule chimique, etc.',])
            ->add('L1_56' , null, ['label' => 'L1_56-Décrire l’étendue de la zone touchée par les produits chimiques?',])
            ->add('L1_57' , null, ['label' => 'L1_57-Superficie de la zone touchée',])
            ->add('L1_58' , null, ['label' => 'L1_58-Nombre de point d\'eau',])
            ->add('L1_59' , null, ['label' => 'L1_59-Nombre de rivière',])
            ->add('L1_60' , null, ['label' => 'L1_60-Nombre de champs de culture touchée',])
            ->add('L1_61' , null, ['label' => 'L1_61-Décrire les effets si la  ou les bonne(s) pratique(s) n’ont pas été prise?',])

            ->add('L1_85' , null, ['label' => 'L1_85- Quelle est la circonscription administrative touchée  par le dialogue? ',])
            ->add('L1_86' , null, ['label' => 'L1_86- Quelles régions ',])
            ->add('L1_87' , null, ['label' => 'L1_87- Laquelle',])
            ->add('L1_88' , null, ['label' => 'L1_88- Quels districts',])
            ->add('L1_89' , null, ['label' => 'L1_89- Quel district ',])
            ->add('L1_90' , null, ['label' => 'L1_90- Statut de la zone où se trouve l’APAC',])
            ->add('L1_91' , null, ['label' => 'L1_91- Est-ce que la zone fait partie d’une aire protégée?',])
            ->add('L1_92' , null, ['label' => 'L1_92- Laquelle?',])
            ->add('L1_93' , null, ['label' => 'L1_93- Quelle catégorie d’aire protégée d’UICN? ',])
            ->add('L1_94' , null, ['label' => 'L1_94- Y-a-t-il un gestionnaire agrée par l’Etat?',])
            ->add('L1_95' , null, ['label' => 'L1_95- Lequel?',])
            ->add('L1_96' , null, ['label' => 'L1_96- Si transfert de gestion des ressources naturelles renouvelables, quelle COBA? ',])
            ->add('L1_98' , null, ['label' => 'L1_98- Autres à préciser ',])
            
            ->add('L1_62' , null, ['label' => 'L1_62-Veuillez décrire l’espèce flore ou faune, genre, espèce, nom scientifique',])
            ->add('L1_63' , null, ['label' => 'L1_63-Informations sur l’endémicité, est-ce que l’espèce fait partie de la liste rouge de l’UICN?',])
            ->add('L1_64' , null, ['label' => 'L1_64-Comment  vivent-ils en  général  (en mettant la description en relation avec la bonne pratique)?',])
            ->add('L1_65' , null, ['label' => 'L1_65-Quelles conditions sine qua none requises pour sa vie notamment pour sa survie ou sa reproduction?',])
            ->add('L1_66' , null, ['label' => 'L1_66-Climat de la zone en général?',])
            ->add('L1_67' , null, ['label' => 'L1_67-La vulnérabilité de l’écosystème par rapport aux changements climatiques?',])
            ->add('L1_68' , null, ['label' => 'L1_68-Les opportunités naturelles ?',])
            ->add('L1_68_autre' , null, ['label' => 'L1_68_autre-Si autre',])
            ->add('L1_69' , null, ['label' => 'L1_69-Type de sol ?',])
            ->add('L1_70' , null, ['label' => 'L1_70-La pente en générale ?',])
            ->add('L1_71' , null, ['label' => 'L1_71-Emplacement par rapport au bassin versant ?',])
            ->add('L1_72' , null, ['label' => 'L1_72-Vulnérabilité à l’érosion ou à la dégradation ?',])
            ->add('L1_73' , null, ['label' => 'L1_73-L\'environnement matin',])
            ->add('L1_74' , null, ['label' => 'L1_74-L\'eau et la vie aquatique concernée par la bonne pratique',])
            ->add('L1_75' , null, ['label' => 'L1_75-Ses caractéristiques',])
            ->add('L1_76' , null, ['label' => 'L1_76-Ses atouts',])
            ->add('L1_77' , null, ['label' => 'L1_77-Sa localisation par rapport au paysage?',])
            ->add('L1_78' , null, ['label' => 'L1_78-Sa localisation par rapport au bassin versant?',])
            ->add('L1_79' , null, ['label' => 'L1_79-Les conditions requises pour une vie en harmonie?',])
            ->add('L1_80' , null, ['label' => 'L1_80-Les produits chimiques ?',])
            ->add('L1_81' , null, ['label' => 'L1_81-Formules chimiques ?',])
            ->add('L1_82' , null, ['label' => 'L1_82-Sa nocivité par rapport à la vie ?',])
            ->add('L1_83' , null, ['label' => 'L1_83-Décrire le niveau de la pollution touchée par les produits chimiques ?',])
            ->add('L1_84' , null, ['label' => 'L1_84-Décrire les caractéristiques de la zone où il y a la bonne pratique (Résumé)',])
            ->add('L1_100' , null, ['label' => 'L1_100-Veuillez décrire les spécificités naturelles  de l’APAC, de l’habitat de la nature : espèces endémiques faune ou flore, chute d’eau, sources thermales,…. ',])
            ->add('L2_1' , null, ['label' => 'L2_1-Quelles sont les principales activités de la communauté bénéficiaires des bonnes pratiques,   ',])
            ->add('L2_1_autre' , null, ['label' => 'L2_1_autre-Si autre',])
            ->add('L2_2' , null, ['label' => 'L2_2-Donnez un pourcentage',])
            ->add('L2_3' , null, ['label' => 'L2_3-Décrire  la liaison entre la communauté et les ressources concernées par la ou les bonnes pratiques : alimentation, artisanat, produits de commerce, etc…. ?',])
            ->add('L2_4' , null, ['label' => 'L2_4-Bien préciser en quoi les ressources contribuent-t-elles à la vie quotidienne des communautés?',])
           
            ->add('L2_16' , null, ['label' => 'L2_16- Identifier qui pilote le dialogue public et société civile?',])
            ->add('L2_17a' , null, ['label' => 'L2_17a- Décrire l’entité : année de création s’il y en a',])
            ->add('L2_17b' , null, ['label' => 'L2_17b- Décrire l’entité : missions',])
            ->add('L2_17c' , null, ['label' => 'L2_17c- Décrire l’entité : objectifs',])
            ->add('L2_17d' , null, ['label' => 'L2_17d- Décrire l’entité : domaines d’intervention',])

            ->add('L2_5' , null, ['label' => 'L2_5-S’il s’agit des peuples autochtones, veuillez décrire le terroir en général et le mécanisme de prise de décision actuel ?',])
           
            ->add('L2_18' , null, ['label' => 'L2_18- Les membres de la communauté utilisent-ils la terminologie locale relative à la terre et à l\'utilisation de la biodiversité?',])
            ->add('L2_19' , null, ['label' => 'L2_19- Le cas échéant, parlent-ils le dialecte ou la langue locale ? ',])
            ->add('L2_20' , null, ['label' => 'L2_20- Nombre de termes locaux spécifiques ?',])
            ->add('L2_21' , null, ['label' => 'L2_21- Décrire la forte relation entre le Fokonolona et la nature : alimentation, phytopharmacie, activité génératrice de revenu, lieu de culte, recharge de la nappe phréatique, parcelles pour les pollinisateurs….',])

           
            ->add('L2_6' , null, ['label' => 'L2_6-Decrire le ou les communautés bénéficiaires de la bonne pratique (Résumé)',])
            ->add('L2_7' , null, ['label' => 'L2_7-Décrire les sources des problèmes confrontés par les communautés ou les acteurs touchés par l’action?',])
            ->add('L2_8' , null, ['label' => 'L2_8-Décrire les différentes formes de problèmes apparus?',])
            ->add('L2_9' , null, ['label' => 'L2_9-Sur le plan conservation de la biodiversité',])
            ->add('L2_10' , null, ['label' => 'L2_10-Sur le plan environnemental',])
            ->add('L2_11' , null, ['label' => 'L2_11-Sur le plan économique',])
            ->add('L2_12' , null, ['label' => 'L2_12-Sur le plan social',])
            ->add('L2_13' , null, ['label' => 'L2_13-Sur le plan politique',])
            ->add('L2_14' , null, ['label' => 'L2_14-Autres menaces',])
            ->add('L2_15' , null, ['label' => 'L2_15-Decrire les problèmes confrontés par les communautés qui a entraîné à la naissance de la bonne pratique (Résumé)',])

            ->add('L2_22' , null, ['label' => 'L2_22- Est-ce que les thématiques de renforcement de capacité concernent les points suivants qui préoccupent  la phase 7 du GEF ',])
            ->add('L2_23' , null, ['label' => 'L2_23- Si Genre, précisez?',])
            ->add('L2_24' , null, ['label' => 'L2_24- Accès au ressources : Veuillez donner une description des problématiques?',])
            ->add('L2_25' , null, ['label' => 'L2_25- Droit et législation : Veuillez donner une description des problématiques?',])
            ->add('L2_26' , null, ['label' => 'L2_26- Gestion de fonds : Veuillez donner une description des problématiques?',])
            ->add('L2_27' , null, ['label' => 'L2_27- Gestion des ressources naturelles : Veuillez donner une description des problématiques?',])
            ->add('L2_28' , null, ['label' => 'L2_28- Empowerment des communautés : Veuillez donner une description des problématiques?',])
            ->add('L2_29' , null, ['label' => 'L2_29- Développement de fonds communautaires : Veuillez donner une description des problématiques?',])
            ->add('L2_30' , null, ['label' => 'L2_30- Genre : Veuillez donner une description des problématiques?',])
            ->add('L2_31' , null, ['label' => 'L2_31- Inclusion sociale : Veuillez donner une description des problématiques?',])
            ->add('L2_32' , null, ['label' => 'L2_32- Accès aux marchés viables : Veuillez donner une description des problématiques?',])
            ->add('L2_33' , null, ['label' => 'L2_33- Donner un aperçu général des problèmes et des interrelations qui bloquent les communautés?',])
            ->add('L2_34' , null, ['label' => 'L2_34- Si législation, précisez?',])
            ->add('L2_35' , null, ['label' => 'L2_35- Si défense des droits, précisez?',])
            ->add('L2_36' , null, ['label' => 'L2_36- Si accès aux prises de décision, à quel niveau?',])
            ->add('L2_37' , null, ['label' => 'L2_37- Si autre, précisez?',])
            ->add('L2_38' , null, ['label' => 'L2_38- Quels sont les problématiques générales des APAC ',])
            ->add('L2_39' , null, ['label' => 'L2_39- Si accès, précisez?',])
            ->add('L2_40' , null, ['label' => 'L2_40- Si défense des droits, précisez?',])
            ->add('L2_41' , null, ['label' => 'L2_41- Donner un aperçu général des problèmes et des interrelations qui bloquent les communautés?',])
            ->add('StatutFiche', ChoiceType::class, [
                'label' => 'StatutFiche',
                'choices' => [
                    'A Vérifier' => '1', 
                    'Valider' => '2',
                    
                ],
                'placeholder' => 'Sélectionnez une option', 
                'required' => true, 
            ]) 
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CapitalisationPartI::class,
        ]);
    }
}
