<?php
/**
 * Created by PhpStorm.
 * User: GHRIB-INFO
 * Date: 2/6/2018
 * Time: 9:47 PM
 */

namespace PIdevBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**Class Commande
 * @package AppBundle\Entity
 */

/**
 * @ORM\Entity(repositoryClass="Doctrine\ORM\EntityRepository")
 */


class Commande
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $reference;

    /**
     * @var \DateTime
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="PIdevBundle\Entity\User")
     * @ORM\JoinColumn("vendeur_id",referencedColumnName="id")
     */
    private $vendeur;

    /**
     * @ORM\ManyToOne(targetEntity="PIdevBundle\Entity\User")
     * @ORM\JoinColumn("acheteur_id",referencedColumnName="id")
     */
    private $acheteur;

    /**
     * @ORM\ManyToOne(targetEntity="PIdevBundle\Entity\Produit")
     * @ORM\JoinColumn("produit_reference",referencedColumnName="reference")
     */
    private $produit;


    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Commande
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
     * Set user
     *
     * @param \PIdevBundle\Entity\User $user
     *
     * @return Commande
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
     * Set vendeur
     *
     * @param \PIdevBundle\Entity\User $vendeur
     *
     * @return Commande
     */
    public function setVendeur(\PIdevBundle\Entity\User $vendeur = null)
    {
        $this->vendeur = $vendeur;

        return $this;
    }

    /**
     * Get vendeur
     *
     * @return \PIdevBundle\Entity\User
     */
    public function getVendeur()
    {
        return $this->vendeur;
    }

    /**
     * Set acheteur
     *
     * @param \PIdevBundle\Entity\User $acheteur
     *
     * @return Commande
     */
    public function setAcheteur(\PIdevBundle\Entity\User $acheteur = null)
    {
        $this->acheteur = $acheteur;

        return $this;
    }

    /**
     * Get acheteur
     *
     * @return \PIdevBundle\Entity\User
     */
    public function getAcheteur()
    {
        return $this->acheteur;
    }

    /**
     * Set produit
     *
     * @param \PIdevBundle\Entity\Produit $produit
     *
     * @return Commande
     */
    public function setProduit(\PIdevBundle\Entity\Produit $produit = null)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \PIdevBundle\Entity\Produit
     */
    public function getProduit()
    {
        return $this->produit;
    }
}
