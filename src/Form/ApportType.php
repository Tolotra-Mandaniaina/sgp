<?php

namespace App\Form;

use App\Entity\Apport;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class ApportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('provenance', TextType::class, [
            'label' => 'Provenance'
        ])
        ->add('nature', TextType::class, [
            'label' => 'Nature'
        ])
        ->add('valeur', NumberType::class, [
            'label' => 'Valeur'
        ])
        ->add('date_estimative_delivrance', DateType::class, [
            'label' => 'Date estimative de délivrance'
        ])
        ->add('date_reel_delivrance', TextType::class, [
            'label' => 'Date réelle de délivrance'
        ])
        ->add('piece_justificative', TextType::class, [
            'label' => 'Pièce justificative',
           
        ]);



    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Apport::class,
        ]);
    }
}
