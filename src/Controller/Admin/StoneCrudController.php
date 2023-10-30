<?php

namespace App\Controller\Admin;

use App\Entity\Stone;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class StoneCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Stone::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
