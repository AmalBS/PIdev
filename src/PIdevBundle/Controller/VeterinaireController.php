<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 07/02/2018
 * Time: 18:14
 */

namespace PIdevBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class VeterinaireController extends Controller
{
    function AcceuilVAction(){

        return $this->render('@PIdev/Veterinaire/Acceuil.html.twig');
    }
    function AcceuilVeterinaireAction(){

        return $this->render('@PIdev/Veterinaire/AcceuilVeterinaire.html.twig');
    }
}