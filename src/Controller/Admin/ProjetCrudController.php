<?php

namespace App\Controller\Admin;

use App\Entity\Projet;
use App\Form\ApportType; // Assurez-vous d'importer la classe ApportType
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;




class ProjetCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Projet::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            //IdField::new('id'),
            TextField::new('projet_no'),
            TextField::new('fonds'),
            DateField::new('date_soumission'),
            CollectionField::new('apport')
            ->setFormTypeOptions([
                'entry_type' => ApportType::class, // Le formulaire pour chaque élément de la collection
                'by_reference' => false,
            ]),
          
          
        ];
    }
    
}
