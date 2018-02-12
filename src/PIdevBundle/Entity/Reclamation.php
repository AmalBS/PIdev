<?php
/**
 * Created by PhpStorm.
 * User: GHRIB-INFO
 * Date: 2/6/2018
 * Time: 9:37 PM
 */

namespace PIdevBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**Class Reclamation2
 * @package AppBundle\Entity
 */

/**
 * @ORM\Entity(repositoryClass="Doctrine\ORM\EntityRepository")
 */


class Reclamation
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $objet;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $statut;


    /**
     * @ORM\ManyToOne(targetEntity="PIdevBundle\Entity\User")
     * @ORM\JoinColumn("user_id",referencedColumnName="id")
     */
    private $user;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set objet
     *
     * @param string $objet
     *
     * @return Reclamation
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Reclamation
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set user
     *
     * @param \PIdevBundle\Entity\User $user
     *
     * @return Reclamation
     */
    public function setUser(\PIdevBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \PIdevBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Reclamation
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }
}
