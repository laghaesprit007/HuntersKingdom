<?php

namespace HuntersKingdomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 * event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="HuntersKingdomBundle\Repository\eventRepository")
 */
class event
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=255, nullable=true)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="langitude", type="string", length=255, nullable=true)
     */
    private $langitude;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime" , nullable=true)
     * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime", nullable=true)
     * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
     */
    private $dateFin;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrParticipent", type="integer")
     */
    private $nbrParticipent;

    /**
     * @var int
     *
     * @ORM\Column(name="placeDispo", type="integer", nullable=true)
     */
    private $placeDispo;
    /**
     *
     * @ORM\ManyToOne(targetEntity="categorie", cascade={"persist"})
     * @ORM\JoinColumn(name="categorie_id",referencedColumnName="id")
     */

    private $categorie;

    /**
     * @ORM\ManyToMany(targetEntity="HuntersKingdomBundle\Entity\personne", inversedBy="events")
     * @ORM\JoinTable(name="persone_event")
     */


    private $persones;

    public function __construct()
    {
        $this->persones = new ArrayCollection();
    }

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
     * @return event
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
     * Set type
     *
     * @param string $type
     *
     * @return event
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return event
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return event
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set langitude
     *
     * @param string $langitude
     *
     * @return event
     */
    public function setLangitude($langitude)
    {
        $this->langitude = $langitude;

        return $this;
    }

    /**
     * Get langitude
     *
     * @return string
     */
    public function getLangitude()
    {
        return $this->langitude;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return event
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return event
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set nbrParticipent
     *
     * @param integer $nbrParticipent
     *
     * @return event
     */
    public function setNbrParticipent($nbrParticipent)
    {
        $this->nbrParticipent = $nbrParticipent;

        return $this;
    }

    /**
     * Get nbrParticipent
     *
     * @return int
     */
    public function getNbrParticipent()
    {
        return $this->nbrParticipent;
    }

    /**
     * Set placeDispo
     *
     * @param integer $placeDispo
     *
     * @return event
     */
    public function setPlaceDispo($placeDispo)
    {
        $this->placeDispo = $placeDispo;

        return $this;
    }

    /**
     * Get placeDispo
     *
     * @return int
     */
    public function getPlaceDispo()
    {
        return $this->placeDispo;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }


}

