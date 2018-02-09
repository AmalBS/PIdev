<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 06/02/2018
 * Time: 19:15
 */

namespace PIdevBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PIdevController extends Controller
{
function loginAction(){

    return $this->render('@PIdev/Login.html.twig');
}
}