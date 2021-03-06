<?php
/**
 * Created by PhpStorm.
 * User: GHRIB-INFO
 * Date: 2/6/2018
 * Time: 9:23 PM
 */

namespace PIdevBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**Class Evenement
 * @package AppBundle\Entity
 */

/**
 * @ORM\Entity(repositoryClass="Doctrine\ORM\EntityRepository")
 */


class Evenement
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
    private $nom;

    /**
     * @var \DateTime
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $lieu;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $confirmation;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Evenement
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Evenement
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     *
     * @return Evenement
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
     * Set description
     *
     * @param string $description
     *
     * @return Evenement
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
     * @return Evenement
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
     * Set confirmation
     *
     * @param boolean $confirmation
     *
     * @return Evenement
     */
    public function setConfirmation($confirmation)
    {
        $this->confirmation = $confirmation;

        return $this;
    }

    /**
     * Get confirmation
     *
     * @return boolean
     */
    public function getConfirmation()
    {
        return $this->confirmation;
    }
}
