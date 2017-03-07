<?php

namespace FormationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class EtudiantController extends Controller
{
    public function ajouterEtudiantAction()
    {
        return $this->render('FormationBundle:Etudiant:ajouter_etudiant.html.twig', array(
        ));
    }

    public function modifierEtudiantAction($id)
    {
        return $this->render('FormationBundle:Etudiant:modifier_etudiant.html.twig', array(
            // ...
        ));
    }

    public function supprimerEtudiantAction($id)
    {
        return $this->render('FormationBundle:Etudiant:supprimer_etudiant.html.twig', array(
            // ...
        ));
    }

    public function afficherEtudiantAction($id)
    {
        //$exception = $this->createAccessDeniedException();
        //return new Response($exception);
        
        return $this->render('FormationBundle:Etudiant:afficher_etudiant.html.twig', array(
            'id_etd' =>$id
        ));
    }

    public function affecterEtudiantAction($id)
    {
        return $this->render('FormationBundle:Etudiant:affecter_etudiant.html.twig', array(
            // ...
        ));
    }

}
