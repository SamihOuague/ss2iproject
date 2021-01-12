<?php

namespace App\Controller\Admin;

use App\Entity\Candidat;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class CandidatCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Candidat::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('customer'),
            AssociationField::new('mission')
        ];
    }
}
