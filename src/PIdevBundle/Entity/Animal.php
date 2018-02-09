<?php
/**
 * Created by PhpStorm.
 * User: GHRIB-INFO
 * Date: 2/6/2018
 * Time: 8:55 PM
 */

namespace PIdevBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**Class Animal
 * @package AppBundle\Entity
 */

/**
 * @ORM\Entity(repositoryClass="Doctrine\ORM\EntityRepository")
 */

class Animal
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
    private $espece;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $race;

    /**
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $sexe;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $fiche;

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
     * Set espece
     *
     * @param string $espece
     *
     * @return Animal
     */
    public function setEspece($espece)
    {
        $this->espece = $espece;

        return $this;
    }

    /**
     * Get espece
     *
     * @return string
     */
    public function getEspece()
    {
        return $this->espece;
    }

    /**
     * Set race
     *
     * @param string $race
     *
     * @return Animal
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return string
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Animal
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Animal
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Animal
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
     * Set image
     *
     * @param string $image
     *
     * @return Animal
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set fiche
     *
     * @param string $fiche
     *
     * @return Animal
     */
    public function setFiche($fiche)
    {
        $this->fiche = $fiche;

        return $this;
    }

    /**
     * Get fiche
     *
     * @return string
     */
    public function getFiche()
    {
        return $this->fiche;
    }

    /**
     * Set confirmation
     *
     * @param boolean $confirmation
     *
     * @return Animal
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


    /**
     * Set user
     *
     * @param \PIdevBundle\Entity\User $user
     *
     * @return Animal
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
