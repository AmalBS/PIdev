<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 07/02/2018
 * Time: 18:14
 */

namespace PIdevBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ReclamationController extends Controller
{
    function AcceuilReclamationAction(){

        return $this->render('@PIdev/Reclamation/AcceuilReclamation.html.twig');
    }

}