<?php

namespace form\formBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * individu
 *
 * @ORM\Table(name="individu")
 * @ORM\Entity(repositoryClass="form\formBundle\Repository\individuRepository")
 */
class individu
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="billet", type="string", length=255)
     */
    private $billet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="anniversaire", type="date")
     */
    private $anniversaire;

    /**
    * @ORM\ManyToOne(targetEntity="form\formBundle\Entity\jour")
    * @ORM\JoinColumn(nullable=false)
    */
    private $jour;


    /**
     * Get id
     *
     * @return int
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
     * @return individu
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return individu
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set billet
     *
     * @param string $billet
     *
     * @return individu
     */
    public function setBillet($billet)
    {
        $this->billet = $billet;

        return $this;
    }

    /**
     * Get billet
     *
     * @return string
     */
    public function getBillet()
    {
        return $this->billet;
    }

    /**
     * Set anniversaire
     *
     * @param \DateTime $anniversaire
     *
     * @return individu
     */
    public function setAnniversaire($anniversaire)
    {
        $this->anniversaire = $anniversaire;

        return $this;
    }

    /**
     * Get anniversaire
     *
     * @return \DateTime
     */
    public function getAnniversaire()
    {
        return $this->anniversaire;
    }

    /**
     * Set jour
     *
     * @param \form\formBundle\Entity\jour $jour
     *
     * @return individu
     */
    public function setJour(\form\formBundle\Entity\jour $jour)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour
     *
     * @return \form\formBundle\Entity\jour
     */
    public function getJour()
    {
        return $this->jour;
    }
}
