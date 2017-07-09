<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AnnoncesListeController extends Controller
{
    /**
     * @Route("/annonceListe")
     */
    public function annonceListeAction()
    {
        $repo=$this->getDoctrine()->getRepository('AppBundle:Annonce');
        $annonces=$repo->findAll();
        return $this->render('AppBundle:AnnoncesListe:annonce_liste.html.twig', array(
            "annonces"=>$annonces
        ));
    }

}
