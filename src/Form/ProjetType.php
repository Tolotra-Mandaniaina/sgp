<?php

namespace App\Form;
use App\Entity\Apport;
use App\Entity\Projet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use App\Form\ApportType; // Importez la classe ApportType



class ProjetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date_soumission')
            ->add('projet_no')
            ->add('fonds')
            ->add('phase')
            ->add('paysage')
            ->add('statut_projet')
            ->add('date_debut_propose')
            ->add('dure_prevu')
            ->add('titre_projet')
            ->add('action_principale_projet')
            ->add('lieu_implantation')
            ->add('nom_local_communaute_beneficiaire')
            ->add('fokontany')
            ->add('nom_organisation')
            ->add('annee_creation')
            ->add('nombre_membre')
            ->add('adresse_physique')
            ->add('telephone')
            ->add('email')
            ->add('nom_signataire')
            ->add('fonction_signataire')
            ->add('nom_contact')
            ->add('fonction_contact')
            ->add('apport', CollectionType::class, [
                'entry_type' => ApportType::class,
                'allow_add' => true,
                'by_reference' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Projet::class,
        ]);
    }
}
