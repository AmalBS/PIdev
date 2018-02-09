<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 07/02/2018
 * Time: 21:00
 */

namespace PIdevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class EspAdminController extends Controller
{

    public function homeAction()
    {
        return $this->render('@PIdev/Admin/Home/Home.html.twig');
    }
    public function dashBoardAction()
    {
        return $this->render('@PIdev/Admin/DashBoard/DashBoard.html.twig');
    }
    public function profilAction()
    {
        return $this->render('@PIdev/Admin/Profil/profil.html.twig');
    }
    public function ajoutAdminAction()
    {
        return $this->render('@PIdev/Admin/Profil/ajoutAdmin.html.twig');
    }
    public function tableAdminAction()
    {
        return $this->render('@PIdev/Admin/tableAdmin/table.html.twig');
    }

    public function tableAnimauxAction()
    {
        return $this->render('@PIdev/Admin/tableAnimaux/table.html.twig');
    }

    public function tableAssociationAction()
    {
        return $this->render('@PIdev/Admin/tableAssociation/table.html.twig');
    }

    public function tableProduitsAction()
    {
        return $this->render('@PIdev/Admin/tableProduits/table.html.twig');
    }
    public function tableRecAction()
    {
        return $this->render('@PIdev/Admin/tableRec/table.html.twig');
    }
    public function tableVetAction()
    {
        return $this->render('@PIdev/Admin/tableVet/table.html.twig');
    }
    public function blankAction()
    {
        return $this->render('@PIdev/Admin/blank/blank.html.twig');
    }
    public function errorAction()
    {
        return $this->render('@PIdev/Admin/erreur/error.html.twig');
    }


}