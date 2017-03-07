<?php

namespace FormationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EtudiantsController extends Controller
{
    public function ajouterEtudiantAction()
    {
        return $this->render('FormationBundle:Etudiants:ajouter_etudiant.html.twig', array(
            // ...
        ));
    }

    public function modifierEtudiantAction($id)
    {
        return $this->render('FormationBundle:Etudiants:modifier_etudiant.html.twig', array(
            // ...
        ));
    }

    public function supprimerEtudiantAction($id)
    {
        return $this->render('FormationBundle:Etudiants:supprimer_etudiant.html.twig', array(
            // ...
        ));
    }

    public function afficherEtudiantAction($id)
    {
        return $this->render('FormationBundle:Etudiants:afficher_etudiant.html.twig', array(
            // ...
        ));
    }

    public function affecterEtudiantAction($id)
    {
        return $this->render('FormationBundle:Etudiants:affecter_etudiant.html.twig', array(
            // ...
        ));
    }

}
