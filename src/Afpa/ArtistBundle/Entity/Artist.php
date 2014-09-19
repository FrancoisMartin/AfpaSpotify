<?php

namespace Afpa\ArtistBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artist
 *
 * @ORM\Table(name="artist")
 * @ORM\Entity(repositoryClass="Afpa\ArtistBundle\Entity\ArtistRepository")
 */
class Artist
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="external_id", type="string", length=255)
     */
    private $externalId;

    /**
     * @var array
     *
     * @ORM\Column(name="genres", type="array")
     */
    private $genres;

    /**
     * @var integer
     *
     * @ORM\Column(name="popularity", type="integer")
     */
    private $popularity;

    /**
     * @var string
     *
     * @ORM\Column(name="external_link", type="string", length=255)
     */
    private $externalLink;


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
     * Set name
     *
     * @param string $name
     * @return Artist
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Artist
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set externalId
     *
     * @param string $externalId
     * @return Artist
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * Get externalId
     *
     * @return string 
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * Set genres
     *
     * @param array $genres
     * @return Artist
     */
    public function setGenres($genres)
    {
        $this->genres = $genres;

        return $this;
    }

    /**
     * Get genres
     *
     * @return array 
     */
    public function getGenres()
    {
        return $this->genres;
    }

    /**
     * Set popularity
     *
     * @param integer $popularity
     * @return Artist
     */
    public function setPopularity($popularity)
    {
        $this->popularity = $popularity;

        return $this;
    }

    /**
     * Get popularity
     *
     * @return integer 
     */
    public function getPopularity()
    {
        return $this->popularity;
    }

    /**
     * Set externalLink
     *
     * @param string $externalLink
     * @return Artist
     */
    public function setExternalLink($externalLink)
    {
        $this->externalLink = $externalLink;

        return $this;
    }

    /**
     * Get externalLink
     *
     * @return string 
     */
    public function getExternalLink()
    {
        return $this->externalLink;
    }

    public function getCategory()
    {
        if ($this->popularity < 20) $category = 'Chanteur';
        elseif ($this->popularity < 40) $category = 'Chanteur connu';
        elseif ($this->popularity < 60) $category = 'Star';
        elseif ($this->popularity < 80) $category = 'Super Star';
        else $category = 'Icône';
        
        return $category;
    }
}
