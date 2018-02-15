<?php
/**
 * Created by PhpStorm.
 * User: GHRIB-INFO
 * Date: 2/6/2018
 * Time: 9:37 PM
 */

namespace PIdevBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**Class Reclamation
 * @package PIdevBundle\Entity
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
     * @ORM\Column(type="string",length=255)
     */
    private $lieu;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $imageAnimaux;


    /**
     * @ORM\ManyToOne(targetEntity="PIdevBundle\Entity\User")
     * @ORM\JoinColumn("user_id",referencedColumnName="id")
     */
    private $user;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $dateReclamation;



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

    /**
     * Set lieu
     *
     * @param string $lieu
     *
     * @return Reclamation
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set imageAnimaux
     *
     * @param string $imageAnimaux
     *
     * @return Reclamation
     */
    public function setImageAnimaux($imageAnimaux)
    {
        $this->imageAnimaux = $imageAnimaux;

        return $this;
    }

    /**
     * Get imageAnimaux
     *
     * @return string
     */
    public function getImageAnimaux()
    {
        return $this->imageAnimaux;
    }

    /**
     * Set dateReclamation
     *
     * @param string $dateReclamation
     *
     * @return Reclamation
     */
    public function setDateReclamation($dateReclamation)
    {
        $this->dateReclamation = $dateReclamation;

        return $this;
    }

    /**
     * Get dateReclamation
     *
     * @return string
     */
    public function getDateReclamation()
    {
        return $this->dateReclamation;
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
}
