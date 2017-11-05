<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MeasurePlace
 *
 * @ORM\Table(name="measure_place")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MeasurePlaceRepository")
 */
class MeasurePlace
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
     * @ORM\Column(name="road_number", type="string", length=255, nullable=true)
     */
    private $roadNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=255, nullable=true)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="district", type="string", length=255, nullable=true)
     */
    private $district;

    /**
     * @var string
     *
     * @ORM\Column(name="county", type="string", length=255, nullable=true)
     */
    private $county;

    /**
     * @var int
     *
     * @ORM\Column(name="speed", type="integer", nullable=true)
     */
    private $speed;

    /**
     * @var string
     *
     * @ORM\Column(name="place_desc", type="text", nullable=true)
     */
    private $placeDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="camera", type="string", length=255, nullable=true)
     */
    private $camera;

    /**
     * @var bool
     *
     * @ORM\Column(name="published", nullable=true, type="boolean")
     */
    private $published;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    public function __construct()
    {
        $this->date      = new \DateTime();
        $this->published = 0;
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
     * Set roadNumber
     *
     * @param string $roadNumber
     *
     * @return MeasurePlace
     */
    public function setRoadNumber($roadNumber)
    {
        $this->roadNumber = $roadNumber;

        return $this;
    }

    /**
     * Get roadNumber
     *
     * @return string
     */
    public function getRoadNumber()
    {
        return $this->roadNumber;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return MeasurePlace
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return MeasurePlace
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set district
     *
     * @param string $district
     *
     * @return MeasurePlace
     */
    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * Get district
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Set speed
     *
     * @param integer $speed
     *
     * @return MeasurePlace
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get speed
     *
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set placeDesc
     *
     * @param string $placeDesc
     *
     * @return MeasurePlace
     */
    public function setPlaceDesc($placeDesc)
    {
        $this->placeDesc = $placeDesc;

        return $this;
    }

    /**
     * Get placeDesc
     *
     * @return string
     */
    public function getPlaceDesc()
    {
        return $this->placeDesc;
    }

    /**
     * Set camera
     *
     * @param string $camera
     *
     * @return MeasurePlace
     */
    public function setCamera($camera)
    {
        $this->camera = $camera;

        return $this;
    }

    /**
     * Get camera
     *
     * @return string
     */
    public function getCamera()
    {
        return $this->camera;
    }

    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return MeasurePlace
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return bool
     */
    public function isPublished()
    {
        return $this->published;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return MeasurePlace
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
     * @param string $county
     *
     * @return MeasurePlace
     */
    public function setCounty($county)
    {
        $this->county = $county;

        return $this;
}

    /**
     * @return string
     */
    public function getCounty()
    {
        return $this->county;
    }
}

