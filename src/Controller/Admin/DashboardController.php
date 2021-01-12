<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\Manager;
use App\Entity\Candidat;
use App\Entity\Client;
use App\Entity\Customer;
use App\Entity\Mission;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $routeBuild = $this->get(CrudUrlGenerator::class)->build();
        return $this->redirect($routeBuild->setController(UserCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('S2ipartner');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Missions', 'fas fa-list', Mission::class);
        yield MenuItem::linkToCrud('Managers', 'fas fa-list', Manager::class);
        yield MenuItem::linkToCrud('Candidats', 'fas fa-list', Candidat::class);
        yield MenuItem::linkToCrud('Clients', 'fas fa-list', Client::class);
        yield MenuItem::linkToCrud('Membres', 'fas fa-list', Customer::class);
    }
}
