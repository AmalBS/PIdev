<?php

namespace PIdevBundle\Controller;

use PIdevBundle\Form\ReclamationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PIdevBundle\Entity\Reclamation;
use Symfony\Component\HttpFoundation\Request;

class EspaceReclamationsController extends Controller
{
    public function AjoutAction(Request $request)
    {        $reclamation = new Reclamation();
        $form = $this->createForm('PIdevBundle\Form\ReclamationType', $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reclamation);
            $em->flush();

            return $this->redirectToRoute('p_idev_home', array('id' => $reclamation->getId()));
        }

        return $this->render('@PIdev/EspaceReclamation/AjoutRec.html.twig', array(

            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ));
    }
    public function ListAction()
    {
        $em = $this->getDoctrine()->getManager()->getRepository("PIdevBundle:Reclamation")->findAll();
        return $this->render('PIdevBundle:EspaceReclamation:AfficheRec.html.twig', array("reclamations" => $em));
    }

    /**public function updateAction($id, Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $reclamation=$em->getRepository("PIdevBundle:Reclamation")->find($id);
        $Form=$this->createForm(ReclamationType::class,$reclamation);
        $Form->handleRequest($request);
        if ($Form->isValid())
        {

            $em->persist($reclamation);
            $em->flush();
            return $this->redirectToRoute('reclamation_Affiche');
        }
        return$this->render("@PIdev/reclamation/update.html.twig",array('form'=>$Form->createView()));
    }*/
    public function DeleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository("PIdevBundle:Reclamation")->find($id);
        $em->remove($reclamation);
        $em->flush();
        return $this->redirectToRoute('pi_tableRec');
    }
    public function affichageAction($id)
    {
        return $this->render('PIdevBundle:Admin/tableRec:affiche.html.twig',array('id'=>$id));
    }
}
