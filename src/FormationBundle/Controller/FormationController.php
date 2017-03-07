<?php

namespace FormationBundle\Controller;

use FormationBundle\Entity\Formation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormationController extends Controller
{
    public function indexAction()
    {
        return $this->render('FormationBundle:Formation:index.html.twig', array(
            // ...
        ));
    }

    public function editAction($id,$title)
    {
        return $this->render('FormationBundle:Formation:edit.html.twig', array(
            // ...
        ));
    }
    public function createAction()
    {
        $this->getDoctrine()->getManager();
        
        $formation = new Formation()
        return $this->render('FormationBundle:Formation:edit.html.twig', array(
            // ...
        ));
    }



    public function showAction($id,$title)
    {
        return $this->render('FormationBundle:Formation:show.html.twig', array(
            'id' => $id,
            'title' => $title
        ));
    }

}
