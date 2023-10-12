<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormInterface;
use App\Entity\Province;
use App\Entity\Region;
use App\Entity\District;
use App\Entity\Commune;

class LocationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder          
            ->add('province', EntityType::class, [
                'class'       => Province::class,
                'placeholder' => '-- Sélectionnez votre province --',
                'mapped'      => false,
                'required' => true,

            ]);

            $builder->get('province')->addEventListener(
                FormEvents::POST_SUBMIT,
                function (FormEvent $event) {
                    $form = $event->getForm();
                    $this->addRegionField($form->getParent(), $form->getData());
                }
            );

            $builder->addEventListener(
                FormEvents::POST_SET_DATA,
                function (FormEvent $event) {
                    $data = $event->getData();
                    /* @var $commune Commune */
                    //$commune = $data->getCommune();
                    $commune = $data ? $data->getCommune() : null;
                    $form    = $event->getForm();
                    if ($commune) {
                        $district = $commune->getDistrict();
                        $region   = $district->getRegion();
                        $province = $region->getProvince();
                        $this->addRegionField($form, $province);
                        $this->addDistrictField($form, $region);
                        $this->addCommuneField($form, $district);
                        $form->get('region')->setData($region);
                        $form->get('district')->setData($district);
                        $form->get('province')->setData($province);
                    } else {
                        $this->addRegionField($form, null);
                        $this->addDistrictField($form, null);
                        $this->addCommuneField($form, null);
                    }
                });
    }

           /**
     * Rajoute un champs region au formulaire
     * @param FormInterface $form
     * @param Province $province
     */
    private function addRegionField(FormInterface $form, ?Province $province)
    {
        $builder = $form->getConfig()->getFormFactory()->createNamedBuilder(
            'region',
            EntityType::class,
            null,
            [
                'class'           => Region::class,
                'placeholder'     => '-- Sélectionnez la region --',
                'mapped'          => false,
                'required'        => true,
                'auto_initialize' => false,
                'choices'         => $province ? $province->getRegions() : []
            ]
        );

        $builder->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) {
                $form = $event->getForm();
//                if (!is_null($form->getData()))
                $this->addDistrictField($form->getParent(), $form->getData());
            }
        );
        $form->add($builder->getForm());
    }

    private function addDistrictField(FormInterface $form, ?Region $region)
    {
        $builder = $form->getConfig()->getFormFactory()->createNamedBuilder(
            'district',
            EntityType::class,
            null,
            [
                'class'           => District::class,
                'placeholder'     => '-- Sélectionnez la district --',
                'mapped'          => false,
                'required'        => true,
                'auto_initialize' => false,
                'choices'         => $region ? $region->getDistricts() : []
            ]);
        $builder->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) {
                $form = $event->getForm();
//                if (!is_null($form->getData()))
                $this->addCommuneField($form->getParent(), $form->getData());
            }
        );
        $form->add($builder->getForm());
    }

    private function addCommuneField(FormInterface $form, ?District $district)
    {
        $form->add('commune', EntityType::class, [
            'class'       => Commune::class,
            'placeholder' => '-- Sélectionnez la commune --',
            'required'        => true,
            'choices'     => $district ? $district->getCommunes() : []
           
        ]);
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
