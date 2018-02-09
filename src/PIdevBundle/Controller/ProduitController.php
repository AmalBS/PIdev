<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 07/02/2018
 * Time: 18:14
 */

namespace PIdevBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ProduitController extends Controller
{
    function AcceuilProduitAction(){

        return $this->render('@PIdev/Produit/AcceuilProduit.html.twig');
    }

}