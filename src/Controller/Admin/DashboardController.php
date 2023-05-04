<?php

namespace App\Controller\Admin;

use App\Entity\Adherent;
use App\Entity\Admin;
use App\Entity\Auteur;
use App\Entity\Editeur;
use App\Entity\Emprunt;
use App\Entity\Exemplaire;
use App\Entity\Genre;
use App\Entity\Livre;
use App\Entity\Stock;
use App\Entity\Usure;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {       
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Biblio Jul');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Genre', 'fas fa-tags', Genre::class);
        yield MenuItem::linkToCrud('Editeur', 'fas fa-user', Editeur::class);
        yield MenuItem::linkToCrud('Auteur', 'fas fa-users', Auteur::class);
        yield MenuItem::linkToCrud('Usure', 'fas fa-list', Usure::class);
        yield MenuItem::linkToCrud('Stock', 'fa-solid fa-cubes-stacked', Stock::class);
        yield MenuItem::linkToCrud('Livre', 'fas fa-book-open', Livre::class);
        yield MenuItem::linkToCrud('Exemplaire', 'fas fa-book', Exemplaire::class);
        yield MenuItem::linkToCrud('Emprunt', 'fa-solid fa-money-bill-trend-up', Emprunt::class);
        yield MenuItem::linkToCrud('Adherent', 'fa-solid fa-book-open-reader', Adherent::class);
        yield MenuItem::linkToCrud('Admin', 'fa-solid fa-book-open-reader', Admin::class);
    }
}
