<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 07/02/2018
 * Time: 18:13
 */

namespace PIdevBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AnimalController extends Controller
{
    function AcceuilAnimalAction(){

        return $this->render('@PIdev/Animal/AcceuilAnimal.html.twig');
    }
}