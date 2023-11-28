<?php

namespace App\Form;

use App\Entity\Conception;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
        ->add('B1', null, ['label' => 'B1-Les membres du projet  sont-ils informés et convaincus de l\'utilité du système ?',])
        ->add('B1a', null, ['label' => 'B1a-Quelles sont les activités requises ? (50 mots)',])
        ->add('B1b', null, ['label' => 'B1b-Importance et Urgence',])
        ->add('B2', null, ['label' => 'B2-Connaissons-nous les aspects que le système SE&KC devrait couvrir et les informations à fournir ? devraient être collectées ?',])
        ->add('B2a', null, ['label' => 'B2a-Quelles sont les activités requises ? (50 mots)',])
        ->add('B2b', null, ['label' => 'B2b-Importance et Urgence',])
        ->add('B3', null, ['label' => 'B3-Sait-on clairement qui utilisera les informations générées par le système SE&KC ?',])
        ->add('B3a', null, ['label' => 'B3a-Quelles sont les activités requises ? (50 mots)',])
        ->add('B3b', null, ['label' => 'B3b-Importance et Urgence',])
        ->add('C1', null, ['label' => 'C1-Existe-t-il des hypothèses de cause à effet définies entre les actions, les résultats/extrants, les effets et les impacts sur l\'Environnement? ',])
        ->add('C1a', null, ['label' => 'C1a-Par le biais de quelles mesures ?',])
        ->add('C1b', null, ['label' => 'C1b-Quelles sont les activités requises ? (50 mots)',])
        ->add('C1c', null, ['label' => 'C1c-Importance et Urgence',])
        ->add('C2', null, ['label' => 'C2-Tous les membres du projet sont-ils d\'accord avec ces hypothèses de cause à effet ?',])
        ->add('C2a', null, ['label' => 'C2a-Quelles sont les activités requises ? (50 mots)',])
        ->add('C2b', null, ['label' => 'C2b-Importance et Urgence',])
        ->add('D1', null, ['label' => 'D1-Sait-on clairement qui collectera quelles données et avec quelles méthodes ?',])
        ->add('D1a', null, ['label' => 'D1a-Quelles sont les activités requises ? (50 mots)',])
        ->add('D1b', null, ['label' => 'D1b-Importance et Urgence',])
        ->add('D2', null, ['label' => 'D2-La fréquence de la collecte des données est-elle claire ?',])
        ->add('D2a', null, ['label' => 'D2a-Quelles sont les activités requises ? (50 mots)',])
        ->add('D2b', null, ['label' => 'D2b-Importance et Urgence',])
        ->add('D3', null, ['label' => 'D3-Les outils de collecte de données à utiliser sont-ils disponibles ?',])
        ->add('D3a', null, ['label' => 'D3a-Quelles sont les activités requises ? (50 mots)',])
        ->add('D3b', null, ['label' => 'D3b-Importance et Urgence',])
        ->add('D4', null, ['label' => 'D4-Est-il précisé qui analysera les données collectées ?',])
        ->add('D4a', null, ['label' => 'D4a-Quelles sont les activités requises ? (50 mots)',])
        ->add('D4b', null, ['label' => 'D4b-Importance et Urgence',])
        ->add('D5', null, ['label' => 'D5-Existe-t-il un plan de travail complet de SE&KC assorti d\'un calendrier ?',])
        ->add('D5a', null, ['label' => 'D5a-Quelles sont les activités requises ? (50 mots)',])
        ->add('D5b', null, ['label' => 'D5b-Importance et Urgence',])
        ->add('D6', null, ['label' => 'D6-Savons-nous déjà comment les données seront stockées ?',])
        ->add('D6a', null, ['label' => 'D6a-Quelles sont les activités requises ? (50 mots)',])
        ->add('D6b', null, ['label' => 'D6b-Importance et Urgence',])
        ->add('E1', null, ['label' => 'E1-Les données sont-elles stockées en toute sécurité avec un niveau de protection adéquat ?',])
        ->add('E1a', null, ['label' => 'E1a-Quelles sont les activités requises ? (50 mots)',])
        ->add('E1b', null, ['label' => 'E1b-Importance et Urgence',])
        ->add('E2', null, ['label' => 'E2-Comment garantir la qualité des données ?',])
        ->add('E2a', null, ['label' => 'E2a-Quelles sont les activités requises ? (50 mots)',])
        ->add('E2b', null, ['label' => 'E2b-Importance et Urgence',])
        ->add('E3', null, ['label' => 'E3-Le cas échéant, autorisez-vous par votre Consentement Libre Informé au Préalable et Eclairé l\'enregistrement des données et informations communautaires ?',])
        ->add('E3a', null, ['label' => 'E3a-Quelles sont les activités requises ? (50 mots)',])
        ->add('E3b', null, ['label' => 'E3b-Importance et Urgence',])
        ->add('E4', null, ['label' => 'E4-Sait-on clairement qui communique les informations collectées et analysées, sous quelle forme, à qui et quand ?',])
        ->add('E4a', null, ['label' => 'E4a-Quelles sont les activités requises ? (50 mots)',])
        ->add('E4b', null, ['label' => 'E4b-Importance et Urgence',])
        ->add('F1', null, ['label' => 'F1-Existe-t-il un document de capitalisation ?',])
        ->add('F1a', null, ['label' => 'F1a-Quelles sont les activités requises ? (50 mots)',])
        ->add('F1b', null, ['label' => 'F1b-Importance et Urgence',])
        ->add('F2', null, ['label' => 'F2-Existe-t-il un document de documentation ?',])
        ->add('F2a', null, ['label' => 'F2a-Quelles sont les activités requises ? (50 mots)',])
        ->add('F2b', null, ['label' => 'F2b-Importance et Urgence',])
        ->add('F3', null, ['label' => 'F3-Existe-t-il un document de communication ou de diffusion ?',])
        ->add('F3a', null, ['label' => 'F3a-Quelles sont les activités requises ? (50 mots)',])
        ->add('F3b', null, ['label' => 'F3b-Importance et Urgence',])
        ->add('F4', null, ['label' => 'F4-Existe-t-il un document de gestion adaptive ?',])
        ->add('F4a', null, ['label' => 'F4a-Quelles sont les activités requises ? (50 mots)',])
        ->add('F4b', null, ['label' => 'F4b-Importance et Urgence',])
        ->add('F5', null, ['label' => 'F5-Existe-t-il un document d’aide à la décision ?',])
        ->add('F5a', null, ['label' => 'F5a-Quelles sont les activités requises ? (50 mots)',])
        ->add('F5b', null, ['label' => 'F5b-Importance et Urgence',])
        ->add('F6', null, ['label' => 'F6-Avez-vous identifié les meilleurs canaux de communication pour chaque utilisateur à chaque niveau ?',])
        ->add('F6a', null, ['label' => 'F6a-Quelles sont les activités requises ? (50 mots)',])
        ->add('F6b', null, ['label' => 'F6b-Importance et Urgence',])
        ->add('G1', null, ['label' => 'G1-Savez-vous à quelle fréquence vous réfléchirez aux résultats du SE&KC ?',])
        ->add('G1a', null, ['label' => 'G1a-Quelles sont les activités requises ? (50 mots)',])
        ->add('G1b', null, ['label' => 'G1b-Importance et Urgence',])
        ->add('G2', null, ['label' => 'G2-Les ressources financières sont-elles suffisantes pour créer et mettre en œuvre le système de suivi et d\'évaluation ?',])
        ->add('G2a', null, ['label' => 'G2a-Quelles sont les activités requises ? (50 mots)',])
        ->add('G2b', null, ['label' => 'G2b-Importance et Urgence',])
        ->add('H1', null, ['label' => 'H1-Les capacités des parties prenantes sont-elles suffisantes pour créer et mettre en œuvre le système de suivi et d\'évaluation ?',])
        ->add('H1a', null, ['label' => 'H1a-Quelles sont les activités requises ? (50 mots)',])
        ->add('H1b', null, ['label' => 'H1b-Importance et Urgence',])
        ->add('H2', null, ['label' => 'H2-Des mesures de soutien supplémentaires (y compris le renforcement des capacités) sont-elles nécessaires pour établir ou mettre en œuvre le système SE&KC ?',])
        ->add('H2a', null, ['label' => 'H2a-Quelles sont les activités requises ? (50 mots)',])
        ->add('H2b', null, ['label' => 'H2b-Importance et Urgence',])
        ->add('H3', null, ['label' => 'H3-L\'identité de la (des) personne(s) chargée(s) de concevoir et de superviser le système SE&KC est-elle clairement établie ?',])
        ->add('H3a', null, ['label' => 'H3a-Quelles sont les activités requises ? (50 mots)',])
        ->add('H3b', null, ['label' => 'H3b-Importance et Urgence',])
        ->add('I1', null, ['label' => 'I1-Quels sont les fichiers auxquels sont émis des commentaires ? Numéros de page ? Numéros de sous-titres ?',])
        ->add('I1a', null, ['label' => 'I1a-Quelles sont les activités requises ? (200 mots)',])
        ->add('I1b', null, ['label' => 'I1b-Importance et Urgence',])
        ->add('I2', null, ['label' => 'I2-Quels sont les commentaires, retours d’informations sur le projet SE&KC ?',])
        ->add('I2a', null, ['label' => 'I2a-Quelles sont les activités requises ? (200 mots)',])
        ->add('I2b', null, ['label' => 'I2b-Importance et Urgence',])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Conception::class,
        ]);
    }
}
