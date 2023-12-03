<?php

namespace App\Form;

use App\Entity\IdentificationProjet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\OptionsResolver\OptionsResolver;

class IdentificationProjetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('A1', null, ['label' => 'A1- Titre du projet',]) 
            ->add('A2', null, ['label' => 'A2- Action principale du projet',])
            ->add('A3', null, ['label' => 'A3- Nom local des communautés bénéficiaires',])
            ->add('A4', null, ['label' => 'A4- Lieu d’implantation',])
            ->add('A5', null, ['label' => 'A5- Région',])
            ->add('A6', null, ['label' => 'A6- Nombre de District d\'intervention',])
            ->add('A6a', null, ['label' => 'A6a- District intervention',])
            ->add('A6b', null, ['label' => 'A6b- District intervention',])
            ->add('A6c', null, ['label' => 'A6c- District intervention',])
            ->add('A6d', null, ['label' => 'A6d- District intervention',])
            ->add('A6e', null, ['label' => 'A6e- District intervention',])
            ->add('A6f', null, ['label' => 'A6f- District intervention',])
            ->add('A6g', null, ['label' => 'A6g- District intervention',])
            ->add('A6h', null, ['label' => 'A6h- District intervention',])
            ->add('A6i', null, ['label' => 'A6i- District intervention',])
            ->add('A6j', null, ['label' => 'A6j- District intervention',])
            ->add('A6k', null, ['label' => 'A6k- District intervention',])
            ->add('A6l', null, ['label' => 'A6l- District intervention',])
            ->add('A6m', null, ['label' => 'A6m- District intervention',])
            ->add('A7', null, ['label' => 'A7- Commune',])
            ->add('A9', null, ['label' => 'A9- Date de soumission',])
            ->add('A10', null, ['label' => 'A10- Projet No.',])
            ->add('A10a', null, ['label' => 'A10a- Projet No. Pour Confirmation.',])
            ->add('A11', null, ['label' => 'A11- Fonds',])
            ->add('A12', null, ['label' => 'A12- Phases',])
            ->add('A13', null, ['label' => 'A13- Paysages',])
            ->add('A13a', null, ['label' => 'A13a- Si paysage potentiel, dans quels régions?',])
            ->add('A14', null, ['label' => 'A14- Sous-paysage',])
            ->add('A14_autre', null, ['label' => 'A14_autre- Si autre ?',])
            ->add('A15', null, ['label' => 'A15- Année',])
            ->add('A16', null, ['label' => 'A16- Statut du projet',])
            ->add('A16_autre', null, ['label' => 'A16_autre- Si autre, précisez?',])
            ->add('A17', null, ['label' => 'A17- Date de début proposé',])
            ->add('A18', null, ['label' => 'A18- Durée prévue du projet',])
            ->add('A19', null, ['label' => 'A19- Domaine intervention',])
            ->add('A19a', null, ['label' => 'A19a- Biodiversité : % des zones terrestres (faunes ou flores) et/ou maritmes
            (faunes ou flores) touché par le projet ?',])
            ->add('A19b', null, ['label' => 'A19b- Atténuation du changement climatique',])
            ->add('A19c', null, ['label' => 'A19c- Dégradation des sols',])
            ->add('A19d', null, ['label' => 'A19d- Gestion durable des forêts',])
            ->add('A19e', null, ['label' => 'A19e- internationales',])
            ->add('A19f', null, ['label' => 'A19f- Produits chimiques et déchets',])
            ->add('A19g', null, ['label' => 'A19g- Développement des capacités',])
            ->add('A19h', null, ['label' => 'A19h- Dialogue public- société civile ',])
            ->add('A19i', null, ['label' => 'A19i- Aire et patrimoine des peuples autochtones',])
            ->add('A20', null, ['label' => 'A20- Catégorie de projet ',])
            ->add('A21', null, ['label' => 'A21- Coordonateur du projet : Homme ou femme?',])
            ->add('A22', null, ['label' => 'A22- Problématique à résoudre?',])
            ->add('A23', null, ['label' => 'A23- Nom de l’organisation',]) 
            ->add('A24', null, ['label' => 'A24- Année de création',]) 
            ->add('A25', null, ['label' => 'A25- Nombre de membres',])  
            ->add('A26', null, ['label' => 'A26- Adresse physique ',])
            ->add('A27', null, ['label' => 'A27- Téléphone',])
            ->add('A28', null, ['label' => 'A28- E-mail',])
            ->add('A29', null, ['label' => 'A29- Nom du signataire',])
            ->add('A30', null, ['label' => 'A30- Fonction du signataire',])
            ->add('A31', null, ['label' => 'A31- Nom du contact ',])
            ->add('A32', null, ['label' => 'A32- Fonction du contact',])
            ->add('A33', null, ['label' => 'A33- Qui est le garant du projet? ',])
            ->add('A34', null, ['label' => 'A34- Année de remplissage de l\'outils',])
            ->add('A35', null, ['label' => 'A35- Numero trimestre ',])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => IdentificationProjet::class,
        ]);
    }
}
