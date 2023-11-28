<?php

namespace App\Form;

use App\Entity\CapitalisationPartIII;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CapitalisationPartIIIType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('A1', null, ['label' => 'A1- Titre du projet  ',])
            ->add('A10', null, ['label' => 'A10- Projet No.',])
            ->add('A11', null, ['label' => 'A11- Fonds',])
            ->add('A12', null, ['label' => 'A12- Phases',])
            ->add('A13', null, ['label' => 'A13- Paysages',])
            ->add('A19', null, ['label' => 'A19- Domaine d\'intervention',])
            ->add('A33', null, ['label' => 'A33- Année de remplissage de l\'outils',])
            ->add('A34', null, ['label' => 'A34- Numero trimestre',])
            ->add('L1_1', null, ['label' => 'L1.1- Y-a-t il de bonne pratique pendant la mise en œuvre du projet?',])
            ->add('L10_1', null, ['label' => 'L10.1- Avez-vous des illustrations réelles pour mettre en exergue la réussite de l’expérience des acteurs?',])
            ->add('L10_2', null, ['label' => 'L10.2- Si oui, type d\'illustration?',])
            ->add('L10_3', null, ['label' => 'L10.3- Veuillez joindre le fichier d\'illustration (Si audio)',])
            ->add('L10_4', null, ['label' => 'L10.4- Veuillez joindre le fichier d\'illustration (Si video)',])
            ->add('L10_5', null, ['label' => 'L10.5- Veuillez joindre le fichier d\'illustration (Si photo)',])
            ->add('L10_6', null, ['label' => 'L10.6- Veuillez joindre le fichier d\'illustration (Si données statistiques)',])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CapitalisationPartIII::class,
        ]);
    }
}
