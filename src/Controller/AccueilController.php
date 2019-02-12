<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index()
    {
        return $this->render('YonneAutos/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/", name="accueil")
     * function qui renvoi la vue de de l'accueil
     */

    public function accueil() {
        return $this->render('YonneAutos/accueil.html.twig'
        );
    }

    /**
     * @Route("/nous-connaitre", name="nous-connaitre")
     * function qui renvoi la vue nous connaitre
     */

    public function QuiSommeNous(){
        return $this->render('YonneAutos/qsm.html.twig'
        );
    }

    /**
     * @Route("/nos-service", name="nos-services")
     * function qui renvoi la vue de nos-service
     */
    public function nosService(){
        return $this->render('YonneAutos/nos-service.html.twig'
        );
    }

    /**
     * @Route("/contact", name="contact")
     * function qui renvoi la vue de contact
     */

    public function Contact(){
        return $this->render('YonneAutos/contact.html.twig'
        );
    }

    /**
     * @Route("/espace-membre", name="espace-connexion")
     * function qui renvoi la vue de la connexion
     */
    public function espaceConnexion(){
        return $this->render('YonneAutos/espace-membre.html.twig'
        );
    }
}
