<?php

namespace App\Form;

use App\Entity\AutoSuivi;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AutoSuiviType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('A1' , null, ['label' => 'A1- Titre du projet  ',]) 
            ->add('A10', null, ['label' => 'A10- Projet No.',]) 
            ->add('A34', null, ['label' => 'A34- Numero trimestre',]) 
            ->add('A35', null, ['label' => 'A35- Nom de l’organisation',]) 
            ->add('A36' , null, ['label' => 'A36- Activités prévues avec leur numéro identification (OS.Résultat.Activité)',]) 
            ->add('A37', null, ['label' => 'A37- Nouvelles activités amendées avec leur num.id. (OS.Résultat.Activité)',]) 
            ->add('A38', null, ['label' => 'A38- Séance de :',]) 
            ->add('A39', null, ['label' => 'A39- Date de séance',]) 
            ->add('B1', null, ['label' => 'B1- Degré d’avancement des activités par rapport au calendrier',]) 
            ->add('B2', null, ['label' => 'B2- Pourcentage des résultats obtenus par rapport aux indicateurs prévus et au calendrier ',]) 
            ->add('B3', null, ['label' => 'B3- Identification et appréciation des facteurs explicatifs affectant l’avancement des activités',]) 
            ->add('B4', null, ['label' => 'B4- Identification des mesures à prendre, des personnes à responsabiliser, et du nouveau calendrier de mise en œuvre',]) 
            ->add('B12', null, ['label' => 'B12- Degré de participation des bénéficiaires à la conception et l’appropriation des projets',]) 
            ->add('B13', null, ['label' => 'B13- Degré de représentativité des groupes associés et de respect des structures impliquées à la programmation, à l\'exécution, au suivi et à l\'évaluation',]) 
            ->add('B14', null, ['label' => 'B14- Degré de capacité de gouvernance des difficultés rencontrées et de gestion des mesures correctrices apportées',]) 
            ->add('B15', null, ['label' => 'B15- Préciser les sources internes ou externes des données utilisées pour produire les indicateurs : ',]) 
            ->add('B16', null, ['label' => 'B16- Nom de la base de données : ',]) 
            ->add('B16_autre', null, ['label' => 'B16- Si autre, préciser ',]) 
            ->add('B17', null, ['label' => 'B17- Type de méthode participative : ',]) 
            ->add('B17_autre', null, ['label' => 'B17- Si autre, préciser',]) 
            ->add('B18', null, ['label' => 'B18- Choisir le type de présentation graphique le plus significatif et démonstratif possible que l\'indicateur doit traduire.',]) 
            ->add('B18_autre', null, ['label' => 'B18- Si autre, préciser',]) 
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AutoSuivi::class,
        ]);
    }
}