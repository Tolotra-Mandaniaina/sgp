<?php

namespace App\Form;

use App\Entity\IdentificationProjet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

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

            ->add('A5_0', null, ['label' => 'Projet National ou Inter-régional ou Régional?',])
        /*  ->add('A5a', null, ['label' => 'A5a- Nombre des Régions d\'intervention (Entre 2 à 5)',])
            ->add('A5b', null, ['label' => 'A5b- Région d\'intervention 1',])
            ->add('A5c', null, ['label' => 'A5c- Région d\'intervention 2',])
            ->add('A5d', null, ['label' => 'A5d- Région d\'intervention 3',])
            ->add('A5e', null, ['label' => 'A5e- Région d\'intervention 4',])
            ->add('A5f', null, ['label' => 'A5f- Région d\'intervention 5',])

 
            ->add('A5b_1', null, ['label' => 'A5b_1- Nombre de(s) District(s) d\'intervention (Maximum = 13) dans la région ${A5b}',])
            ->add('A5b_2', null, ['label' => 'A5b_2- Région d\'intervention1',])
            ->add('A5b_3', null, ['label' => 'A5b_3- Région d\'intervention2',])
            ->add('A5b_4', null, ['label' => 'A5b_4- Région d\'intervention3',])
            ->add('A5b_5', null, ['label' => 'A5b_5- Région d\'intervention4',])
            ->add('A5b_6', null, ['label' => 'A5b_6- Région d\'intervention5',])
            ->add('A5b_7', null, ['label' => 'A5b_7- Région d\'intervention6',])
            ->add('A5b_8', null, ['label' => 'A5b_8- Région d\'intervention7',])
            ->add('A5b_9', null, ['label' => 'A5b_9- Région d\'intervention8',])
            ->add('A5b_10', null, ['label' => 'A5b_10- Région d\'intervention9',])
            ->add('A5b_11', null, ['label' => 'A5b_11- Région d\'intervention10',])
            ->add('A5b_12', null, ['label' => 'A5b_12- Région d\'intervention11',])
            ->add('A5b_13', null, ['label' => 'A5b_13- Région d\'intervention12',])
            ->add('A5b_14', null, ['label' => 'A5b_14- Région d\'intervention13',])

            ->add('A5c_1', null, ['label' => 'A5b_1- Nombre de(s) District(s) d\'intervention (Maximum = 13) dans la région ${A5c}',])
            ->add('A5c_2', null, ['label' => 'A5c_2- Région d\'intervention1',])
            ->add('A5c_3', null, ['label' => 'A5c_3- Région d\'intervention2',])
            ->add('A5c_4', null, ['label' => 'A5c_4- Région d\'intervention3',])
            ->add('A5c_5', null, ['label' => 'A5c_5- Région d\'intervention4',])
            ->add('A5c_6', null, ['label' => 'A5c_6- Région d\'intervention5',])
            ->add('A5c_7', null, ['label' => 'A5c_7- Région d\'intervention6',])
            ->add('A5c_8', null, ['label' => 'A5c_8- Région d\'intervention7',])
            ->add('A5c_9', null, ['label' => 'A5c_9- Région d\'intervention8',])
            ->add('A5c_10', null, ['label' => 'A5c_10- Région d\'intervention9',])
            ->add('A5c_11', null, ['label' => 'A5c_11- Région d\'intervention10',])
            ->add('A5c_12', null, ['label' => 'A5c_12- Région d\'intervention11',])
            ->add('A5c_13', null, ['label' => 'A5c_13- Région d\'intervention12',])
            ->add('A5c_14', null, ['label' => 'A5c_14- Région d\'intervention13',])


            ->add('A5d_1', null, ['label' => 'A5b_1- Nombre de(s) District(s) d\'intervention (Maximum = 13) dans la région ${A5d}',])
            ->add('A5d_2', null, ['label' => 'A5d_2- Région d\'intervention1',])
            ->add('A5d_3', null, ['label' => 'A5d_3- Région d\'intervention2',])
            ->add('A5d_4', null, ['label' => 'A5d_4- Région d\'intervention3',])
            ->add('A5d_5', null, ['label' => 'A5d_5- Région d\'intervention4',])
            ->add('A5d_6', null, ['label' => 'A5d_6- Région d\'intervention5',])
            ->add('A5d_7', null, ['label' => 'A5d_7- Région d\'intervention6',])
            ->add('A5d_8', null, ['label' => 'A5d_8- Région d\'intervention7',])
            ->add('A5d_9', null, ['label' => 'A5d_9- Région d\'intervention8',])
            ->add('A5d_10', null, ['label' => 'A5d_10- Région d\'intervention9',])
            ->add('A5d_11', null, ['label' => 'A5d_11- Région d\'intervention10',])
            ->add('A5d_12', null, ['label' => 'A5d_12- Région d\'intervention11',])
            ->add('A5d_13', null, ['label' => 'A5d_13- Région d\'intervention12',])
            ->add('A5d_14', null, ['label' => 'A5d_14- Région d\'intervention13',])


            ->add('A5e_1', null, ['label' => 'A5b_1- Nombre de(s) District(s) d\'intervention (Maximum = 13) dans la région ${A5e}',])
            ->add('A5e_2', null, ['label' => 'A5e_2- Région d\'intervention1',])
            ->add('A5e_3', null, ['label' => 'A5e_3- Région d\'intervention2',])
            ->add('A5e_4', null, ['label' => 'A5e_4- Région d\'intervention3',])
            ->add('A5e_5', null, ['label' => 'A5e_5- Région d\'intervention4',])
            ->add('A5e_6', null, ['label' => 'A5e_6- Région d\'intervention5',])
            ->add('A5e_7', null, ['label' => 'A5e_7- Région d\'intervention6',])
            ->add('A5e_8', null, ['label' => 'A5e_8- Région d\'intervention7',])
            ->add('A5e_9', null, ['label' => 'A5e_9- Région d\'intervention8',])
            ->add('A5e_10', null, ['label' => 'A5e_10- Région d\'intervention9',])
            ->add('A5e_11', null, ['label' => 'A5e_11- Région d\'intervention10',])
            ->add('A5e_12', null, ['label' => 'A5e_12- Région d\'intervention11',])
            ->add('A5e_13', null, ['label' => 'A5e_13- Région d\'intervention12',])
            ->add('A5e_14', null, ['label' => 'A5e_14- Région d\'intervention13',])


            ->add('A5f_1', null, ['label' => 'A5b_1- Nombre de(s) District(s) d\'intervention (Maximum = 13) dans la région ${A5e}',])
            ->add('A5f_2', null, ['label' => 'A5f_2- Région d\'intervention1',])
            ->add('A5f_3', null, ['label' => 'A5f_3- Région d\'intervention2',])
            ->add('A5f_4', null, ['label' => 'A5f_4- Région d\'intervention3',])
            ->add('A5f_5', null, ['label' => 'A5f_5- Région d\'intervention4',])
            ->add('A5f_6', null, ['label' => 'A5f_6- Région d\'intervention5',])
            ->add('A5f_7', null, ['label' => 'A5f_7- Région d\'intervention6',])
            ->add('A5f_8', null, ['label' => 'A5f_8- Région d\'intervention7',])
            ->add('A5f_9', null, ['label' => 'A5f_9- Région d\'intervention8',])
            ->add('A5f_10', null, ['label' => 'A5f_10- Région d\'intervention9',])
            ->add('A5f_11', null, ['label' => 'A5f_11- Région d\'intervention10',])
            ->add('A5f_12', null, ['label' => 'A5f_12- Région d\'intervention11',])
            ->add('A5f_13', null, ['label' => 'A5f_13- Région d\'intervention12',])
            ->add('A5f_14', null, ['label' => 'A5f_14- Région d\'intervention13',])
*/
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
            ->add('A11', ChoiceType::class, [
                'label' => 'A11- Fonds',
                'choices' => [
                    'CORE' => '1', 
                    'STAR' => '2',
                    'ICCA - GSI' => '3',
                ],
                'placeholder' => 'Sélectionnez une option', 
                'required' => true, 
            ])
            ->add('A12', null, ['label' => 'A12- Phases',])            
            ->add('A13', ChoiceType::class, [
                'label' => 'A13- Paysages',
                'choices' => [
                    'Nord' => '1', 
                    'Est' => '2',
                    'Sud-Ouest' => '3',
                    'Centre' => '4',
                    'Potentiel' => '5',
                ],
                'placeholder' => 'Sélectionnez une option', 
                'required' => true, 
            ])

            ->add('A13a', null, ['label' => 'A13a- Si paysage potentiel, dans quels régions?',])
          

            ->add('A14', ChoiceType::class, [
                'label' => 'A14- Sous Paysages',
                'choices' => [
                    'Ambaro' => '1', 
                    'Comatsa' => '2',
                    'Mamabay' => '3',
                    'Caz' => '4',
                    'Cofam' => '5',
                    'Mahafaly' => '6',
                    'Mikea' => '7',
                    'Autres' => '77',
                ],
                'placeholder' => 'Sélectionnez une option', 
                'required' => true, 
            ])

            ->add('A14_autre', null, ['label' => 'A14_autre- Si autre ?',])
            ->add('A15', null, ['label' => 'A15- Année',])
            ->add('A16', ChoiceType::class, [
                'label' => 'A16- Statut du projet',
                'choices' => [
                    'Project activities completed' => '1', 
                    'Final reports pending' => '2',
                    'Project Terminated Before Completion' => '3',
                    'Satisfactorily Completed' => '4',
                    'Autres' => '77',
                ],
                'placeholder' => 'Sélectionnez une option', 
                'required' => true, 
            ])


            ->add('A16_autre', null, ['label' => 'A16_autre- Si autre, précisez?',])
            ->add('A17', null, ['label' => 'A17- Date de début proposé',])
            ->add('A18', null, ['label' => 'A18- Durée prévue du projet',])
            
            ->add('A19', ChoiceType::class, [
                'label' => 'A19- Domaine intervention',
                'choices' => [
                        'Biodiversité' => 'Biodiversité',
                        'Atténuation du changement climatique' => 'Atténuation du changement climatique',
                        'Dégradation des sols' => 'Dégradation des sols',
                        'Gestion durable des forêts' => 'Gestion durable des forêts',
                        'Eaux internationales' => 'Eaux internationales',
                        'Produits chimiques et déchets' => 'Produits chimiques et déchets',
                        'Développement des capacités' => 'Développement des capacités',
                        'Dialogue public-société civile' => 'Dialogue public-société civile',
                        'Aire et patrimoine des peuples autochtones' => 'Aire et patrimoine des peuples autochtones',
                ],
                'multiple' => true, // Permet le choix multiple
                'expanded' => true, // Affiche les cases à cocher plutôt qu'une liste déroulante (optionnel)
                'required' => false, // ou true selon vos besoins
            ])



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
           

             
            ->add('A20', ChoiceType::class, [
                'label' => 'A20- Catégorie de projet',
                'choices' => [
                        'Action de démonstration' => 'Action de démonstration',
                        'Conservation communautaire' => 'Conservation communautaire',
                        'Agriculture/ pêche durables et sécurité alimentaire' => 'Agriculture/ pêche durables et sécurité alimentaire',
                        'Accompagnement/ développement de capacités' => 'Accompagnement/ développement de capacités',
                        'Co-avantages de l\'accès à l\'énergie émettant peu de carbone' => 'Co-avantages de l\'accès à l\'énergie émettant peu de carbone',
                        'Coalitions locales et sud-sud' => 'Coalitions locales et sud-sud',
                        'Dialogue OSC-gouvernement-secteur privé' => 'Dialogue OSC-gouvernement-secteur privé',
                        'Inclusion sociale des personnes handicapées/ des femmes et des jeunes' => 'Inclusion sociale des personnes handicapées/ des femmes et des jeunes',
                        'Gestion des connaissances: capitalisation/ documentation/ communication' => 'Gestion des connaissances: capitalisation/ documentation/ communication',
                        'Suivi et évaluation des résultats/ effets/ impacts' => 'Suivi et évaluation des résultats/ effets/ impacts',
                        'Analyse politique' => 'Analyse politique',
                        'Information/ Réseaux/ Dialogue politique' => 'Information/ Réseaux/ Dialogue politique',
                ],
                'multiple' => true, // Permet le choix multiple
                'expanded' => true, // Affiche les cases à cocher plutôt qu'une liste déroulante (optionnel)
                'required' => false, // ou true selon vos besoins
            ])


            ->add('A21', ChoiceType::class, [
                'label' => 'A21- Coordonateur du projet : Homme ou femme?*',
                'choices' => [
                    'Homme' => '1', 
                    'Femme' => '2',
                   
                ],
                'placeholder' => 'Sélectionnez une option', 
                
            ])
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
            'data_class' => IdentificationProjet::class,
        ]);
    }
}
