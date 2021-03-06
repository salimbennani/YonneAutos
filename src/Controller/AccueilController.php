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

    /**
     * @Route("/rappelez-moi", name="rappelez-moi")
     * function qui renvoi la pop-up de rappel
     */

    public function rappelezMoi(){
    	return $this->render('YonneAutos/rappelez-moi.html.twig'
    	);
    }
    /**
     * @Route("/espace-membre", name="espaceMembre")
     * function qui renvoi la vue de l'espace membre
     */
    public function espaceMembre(){
    	return $this->render('YonneAutos/espace-membre.html.twig'
    	);
    }
    /**
     * @Route("/collection", name="collection")
     * function qui affiche l'id 30 de la page MaCollection
     */
    public function MaCollection(){
    	return $this->render('YonneAutos/MaCollection.html.twig'
    	);
    }
}
