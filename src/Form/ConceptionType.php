<?php

namespace App\Form;

use App\Entity\Conception;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class ConceptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('A1', null, ['label' => 'A1-Séance',])
        ->add('A2', null, ['label' => 'A2-Date de séance',])
        ->add('A3', null, ['label' => 'A3-Avant ou après de la séance?',])
        ->add('A4', null, ['label' => 'A4-Nom de l\'organisation',])
        ->add('A5', null, ['label' => 'A5-Nom du contact',])
        ->add('A6', null, ['label' => 'A6-Numéro téléphone',])
        ->add('A7', null, ['label' => 'A7-Email',])
        ->add('B1', ChoiceType::class, [
            'label' => 'B1- Les membres du projet sont-ils informés et convaincus de l\'utilité du système ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        
        ->add('B1a', null, ['label' => 'B1a-Quelles sont les activités requises ? (50 mots)',])
        ->add('B1b', ChoiceType::class, [
            'label' => 'B1b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('B2', ChoiceType::class, [
            'label' => 'B2- Connaissons-nous les aspects que le système SE&KC devrait couvrir et les informations à fournir ? devraient être collectées ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        
        ->add('B2a', null, ['label' => 'B2a-Quelles sont les activités requises ? (50 mots)',])
       
        ->add('B2b', ChoiceType::class, [
            'label' => 'B2b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        
        ->add('B3', null, ['label' => 'B3-Sait-on clairement qui utilisera les informations générées par le système SE&KC ?',])
        ->add('B3a', null, ['label' => 'B3a-Quelles sont les activités requises ? (50 mots)',])

        ->add('B3b', ChoiceType::class, [
            'label' => 'B3b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('C1', ChoiceType::class, [
            'label' => 'C1- Existe-t-il des hypothèses de cause à effet définies entre les actions, les résultats/extrants, les effets et les impacts sur l\'Environnement ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        
        ->add('C1a', null, ['label' => 'C1a-Par le biais de quelles mesures ?',])
        ->add('C1b', null, ['label' => 'C1b-Quelles sont les activités requises ? (50 mots)',])
        ->add('C1c', ChoiceType::class, [
            'label' => 'C1c- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('C2', ChoiceType::class, [
            'label' => 'C2- Tous les membres du projet sont-ils d\'accord avec ces hypothèses de cause à effet ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        
        ->add('C2a', null, ['label' => 'C2a-Quelles sont les activités requises ? (50 mots)',])

        ->add('C2b', ChoiceType::class, [
            'label' => 'C2b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('D1', ChoiceType::class, [
            'label' => 'D1- Sait-on clairement qui collectera quelles données et avec quelles méthodes ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        
        ->add('D1a', null, ['label' => 'D1a-Quelles sont les activités requises ? (50 mots)',])

        ->add('D1b', ChoiceType::class, [
            'label' => 'D1b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('D2', ChoiceType::class, [
            'label' => 'D2- La fréquence de la collecte des données est-elle claire ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        
        ->add('D2a', null, ['label' => 'D2a-Quelles sont les activités requises ? (50 mots)',])

        ->add('D2b', ChoiceType::class, [
            'label' => 'D2b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('D3', ChoiceType::class, [
            'label' => 'D3- Les outils de collecte de données à utiliser sont-ils disponibles ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        
        ->add('D3a', null, ['label' => 'D3a-Quelles sont les activités requises ? (50 mots)',])
        ->add('D3b', ChoiceType::class, [
            'label' => 'D3b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('D4', ChoiceType::class, [
            'label' => 'D4- Est-il précisé qui analysera les données collectées ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
                ->add('D4a', null, ['label' => 'D4a-Quelles sont les activités requises ? (50 mots)',])
        ->add('D4b', ChoiceType::class, [
            'label' => 'D4b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('D5', ChoiceType::class, [
            'label' => 'D5- Existe-t-il un plan de travail complet de SE&KC assorti d\'un calendrier ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('D5a', null, ['label' => 'D5a-Quelles sont les activités requises ? (50 mots)',])

        ->add('D5b', ChoiceType::class, [
            'label' => 'D5b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('D6', ChoiceType::class, [
            'label' => 'D6- Savons-nous déjà comment les données seront stockées ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('D6a', null, ['label' => 'D6a-Quelles sont les activités requises ? (50 mots)',])

        ->add('D6b', ChoiceType::class, [
            'label' => 'D6b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('E1', ChoiceType::class, [
            'label' => 'E1- Les données sont-elles stockées en toute sécurité avec un niveau de protection adéquat ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
                ->add('E1a', null, ['label' => 'E1a-Quelles sont les activités requises ? (50 mots)',])

        ->add('E1b', ChoiceType::class, [
            'label' => 'E1b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('E2', ChoiceType::class, [
            'label' => 'E2- Comment garantir la qualité des données ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
                ->add('E2a', null, ['label' => 'E2a-Quelles sont les activités requises ? (50 mots)',])
        ->add('E2b', ChoiceType::class, [
            'label' => 'E2b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('E3', ChoiceType::class, [
            'label' => 'E3- Le cas échéant, autorisez-vous par votre Consentement Libre Informé au Préalable et Eclairé l\'enregistrement des données et informations communautaires ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
                ->add('E3a', null, ['label' => 'E3a-Quelles sont les activités requises ? (50 mots)',])

        ->add('E3b', ChoiceType::class, [
            'label' => 'E3b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('E4', ChoiceType::class, [
            'label' => 'E4- Sait-on clairement qui communique les informations collectées et analysées, sous quelle forme, à qui et quand ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
                ->add('E4a', null, ['label' => 'E4a-Quelles sont les activités requises ? (50 mots)',])

        ->add('E4b', ChoiceType::class, [
            'label' => 'E4b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('F1', ChoiceType::class, [
            'label' => 'F1- Existe-t-il un document de capitalisation ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
                ->add('F1a', null, ['label' => 'F1a-Quelles sont les activités requises ? (50 mots)',])

        ->add('F1b', ChoiceType::class, [
            'label' => 'F1b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('F2', ChoiceType::class, [
            'label' => 'F2- Existe-t-il un document de documentation ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
                ->add('F2a', null, ['label' => 'F2a-Quelles sont les activités requises ? (50 mots)',])

        ->add('F2b', ChoiceType::class, [
            'label' => 'F2b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('F3', ChoiceType::class, [
            'label' => 'F3- Existe-t-il un document de communication ou de diffusion ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
                ->add('F3a', null, ['label' => 'F3a-Quelles sont les activités requises ? (50 mots)',])

        ->add('F3b', ChoiceType::class, [
            'label' => 'F3b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('F4', ChoiceType::class, [
            'label' => 'F4- Existe-t-il un document de gestion adaptive ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
                ->add('F4a', null, ['label' => 'F4a-Quelles sont les activités requises ? (50 mots)',])
        ->add('F4b', ChoiceType::class, [
            'label' => 'F4b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('F5', ChoiceType::class, [
            'label' => 'F5- Existe-t-il un document d’aide à la décision ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
                ->add('F5a', null, ['label' => 'F5a-Quelles sont les activités requises ? (50 mots)',])

        ->add('F5b', ChoiceType::class, [
            'label' => 'F5b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('F6', ChoiceType::class, [
            'label' => 'F6- Avez-vous identifié les meilleurs canaux de communication pour chaque utilisateur à chaque niveau ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
                ->add('F6a', null, ['label' => 'F6a-Quelles sont les activités requises ? (50 mots)',])

        ->add('F6b', ChoiceType::class, [
            'label' => 'F6b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('G1', ChoiceType::class, [
            'label' => 'G1- Savez-vous à quelle fréquence vous réfléchirez aux résultats du SE&KC ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
                ->add('G1a', null, ['label' => 'G1a-Quelles sont les activités requises ? (50 mots)',])

        ->add('G1b', ChoiceType::class, [
            'label' => 'G1b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('G2', ChoiceType::class, [
            'label' => 'G2- Les ressources financières sont-elles suffisantes pour créer et mettre en œuvre le système de suivi et d\'évaluation ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
                ->add('G2a', null, ['label' => 'G2a-Quelles sont les activités requises ? (50 mots)',])
        ->add('G2b', ChoiceType::class, [
            'label' => 'G2b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('H1', ChoiceType::class, [
            'label' => 'H1- Les capacités des parties prenantes sont-elles suffisantes pour créer et mettre en œuvre le système de suivi et d\'évaluation ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
                ->add('H1a', null, ['label' => 'H1a-Quelles sont les activités requises ? (50 mots)',])

        ->add('H1b', ChoiceType::class, [
            'label' => 'H1b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('H2', ChoiceType::class, [
            'label' => 'H2- Des mesures de soutien supplémentaires (y compris le renforcement des capacités) sont-elles nécessaires pour établir ou mettre en œuvre le système SE&KC ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
                ->add('H2a', null, ['label' => 'H2a-Quelles sont les activités requises ? (50 mots)',])

        ->add('H2b', ChoiceType::class, [
            'label' => 'H2b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('H3', ChoiceType::class, [
            'label' => 'H3- L\'identité de la (des) personne(s) chargée(s) de concevoir et de superviser le système SE&KC est-elle clairement établie ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
                ->add('H3a', null, ['label' => 'H3a-Quelles sont les activités requises ? (50 mots)',])

        ->add('H3b', ChoiceType::class, [
            'label' => 'H3b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('I1', ChoiceType::class, [
            'label' => 'I1- Quels sont les fichiers auxquels sont émis des commentaires ? Numéros de page ? Numéros de sous-titres ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
            'required' => false,
        ])
                ->add('I1a', null, ['label' => 'I1a-Quelles sont les activités requises ? (200 mots)',])

        ->add('I1b', ChoiceType::class, [
            'label' => 'I1b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ->add('I2', ChoiceType::class, [
            'label' => 'I2- Quels sont les commentaires, retours d’informations sur le projet SE&KC ?',
            'choices' => [
                'Oui' => '1',
                'Non' => '2',
            ],
            'placeholder' => 'Sélectionnez une option',
            'required' => false,
        ])
                ->add('I2a', null, ['label' => 'I2a-Quelles sont les activités requises ? (200 mots)',])
        ->add('I2b', ChoiceType::class, [
            'label' => 'I2b- Importance et Urgence',
            'choices' => [
                'Important et urgent' => '1',
                'Important mais pas urgent' => '2',
                'Peu important mais urgent' => '3',
                'Pas si important et pas si urgent' => '4',
                'Déjà fait' => '0',
            ],
            'placeholder' => 'Sélectionnez une option',
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Conception::class,
        ]);
    }
}
