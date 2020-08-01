<?php

namespace App\Controller\Admin;

use App\Entity\Offer;
use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Store');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');

        yield MenuItem::section('Store');
        yield MenuItem::linkToCrud('Offect', 'fa fa-tags', Offer::class);
        yield MenuItem::linkToCrud('Product', 'fa fa-file-text', Product::class);

        // MenuItem::section('Users'),
        // MenuItem::linkToCrud('Comments', 'fa fa-comment', Comment::class),
        // MenuItem::linkToCrud('Users', 'fa fa-user', User::class),
    }
}
