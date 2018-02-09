<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 07/02/2018
 * Time: 18:15
 */

namespace PIdevBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AssociationController extends Controller
{
    function AcceuilAssAction(){

        return $this->render('@PIdev/Association/Acceuil.html.twig');
    }
    function AcceuilAssociationAction(){

        return $this->render('@PIdev/Association/AcceuilAssociation.html.twig');
    }
}