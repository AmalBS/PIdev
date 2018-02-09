<?php

namespace PIdevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PIdevBundle:Default:index.html.twig');
    }

    public function layoutAction()
    {
        return $this->render('PIdevBundle::layout.html.twig');
    }
    public function registAction()
    {
        return $this->render('@PIdev/Regist.html.twig');
    }

}
