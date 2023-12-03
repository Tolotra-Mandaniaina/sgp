<?php

namespace App\Form;

use App\Entity\AutoEvaluation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AutoEvaluationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('A1' , null, ['label' => 'A1- Titre du projet  ',]) 
            ->add('A5' , null, ['label' => 'A5- Région d\'intervention   ',]) 
            ->add('A10', null, ['label' => 'A10- Projet No.',]) 
            ->add('A10a', null, ['label' => 'A10a- Projet No. Pour Confirmation',]) 

            ->add('A23', null, ['label' => 'A23- Nom de l\'organisation',]) 
            ->add('A35', null, ['label' => 'Numero trimestre : de 0 (état zéro) à 20',]) 
            ->add('A36' , null, ['label' => 'A36- Activités prévues avec leur numéro identification (OS.Résultat.Activité)',]) 
            ->add('A37', null, ['label' => 'A37- Nouvelles activités amendées avec leur num.id. (OS.Résultat.Activité)',]) 
            ->add('A39', null, ['label' => 'A39- Date de séance',]) 
            ->add('B1', null, ['label' => '	B1- 	Réussites (100mots)	',])
            ->add('B2', null, ['label' => '	B2-	Objectifs réalisés (100mots) ',])
            ->add('B3', null, ['label' => '	B3-	Points forts (100mots)	',])
            ->add('B4', null, ['label' => '	B4-	Appropriation par plaisir, amusement (100mots)	',])
            ->add('B5', null, ['label' => '	B5-	Echecs (100mots)	',])
            ->add('B6', null, ['label' => '	B6-	Faiblesses (100mots)	',])
            ->add('B7', null, ['label' => '	B7-	Difficultés (100mots)	',])
            ->add('B8', null, ['label' => '	B8-	Goulots d\'étranglement (100mots)	',])
            ->add('B9', null, ['label' => '	B9-	Découragement par anxiété, dépression (100mots)	',])
            ->add('B10', null, ['label' => 'B10- Potentialités (100mots)	',])
            ->add('B11', null, ['label' => 'B11- Idées (100mots)	',])
            ->add('B12', null, ['label' => 'B12- Souhaits (100mots)	',])
            ->add('B13', null, ['label' => 'B13- Tendances (100mots)	',])
            ->add('B14', null, ['label' => 'B14- Capacités inexploitées (100mots)	',])
            ->add('B15', null, ['label' => 'B15- Obstacles (100mots)	',])
            ->add('B16', null, ['label' => 'B16- Résistance (100mots)	',])
            ->add('B17', null, ['label' => 'B17- Conditions de cadre défavorables (100mots)	',])
            ->add('B18', null, ['label' => 'B18- Comment sont respectées et décrites les multiples expériences des différentes personnes concernées ? (100mots)	',])
            ->add('B19', null, ['label' => 'B19- Comment sont communément évaluées les expériences, les opinions, les estimations et les perceptions de tous les groupes socio-culturels ? (100mots) ',])
            ->add('B20', null, ['label' => 'B20- Quelles sont les recommandations-solutions aux problèmes découvertes d\'un commun accord ? (100mots) ',])
            ->add('B21', null, ['label' => 'B21- Quels sont les ajustements des objectifs et de planification à partir de l’auto-évaluation ? (100mots)	',])
            ->add('B22', null, ['label' => 'B22- Quels sont les ressources humaines, matérielles et financières réellement utilisées ? (100mots)	',])
            ->add('B23', null, ['label' => 'B23- Quels sont les impacts ou changements (positifs et /ou négatifs) créés observés dans l’Environnement ? (100mots)	',])
            ->add('B24', null, ['label' => 'B24- Evaluation de la situation par les écarts, les seuils critiques, les valeurs cibles	',])
            ->add('B25', null, ['label' => 'B25- Présentation des solutions possibles, des conseils de suivi de la situation, des actions correctrices,…	',])
            ->add('B26', null, ['label' => 'B26- Appréciations permettant de prendre des décisions	',])
            ->add('B27', null, ['label' => 'B27- Coûts de la collecte, du traitement et des utilisations des indicateurs	',])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AutoEvaluation::class,
        ]);
    }
}
