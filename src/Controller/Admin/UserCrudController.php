<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
     
        $roles = array_combine(User::ROLES, User::ROLES);

        return [
           
            TextField::new('username')->setRequired(true),
            TextField::new('password')->setRequired(true),
            TextField::new('adress')->setRequired(true),
            NumberField::new('numero')->setRequired(true),
           
            ChoiceField::new('roles')
                ->setChoices($roles)
                ->allowMultipleChoices()
                ->setRequired(true),
        ];
    }
}
