<?php
namespace Henter\GEOBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(collection="places",repositoryClass="Henter\GEOBundle\Repository\PlaceRepository")
 * @MongoDB\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 * @MongoDB\Indexes({
 *   @MongoDB\Index(keys={"coordinate"="2d"}),
 *   @MongoDB\Index(keys={"coordinate"="2dsphere"})
 * })
 */
class Place
{
    /**
     *
     * @MongoDB\Id(strategy="INCREMENT")
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $title;


    /**
     * @MongoDB\Field(type="string")
     */
    protected $address;

    /**
     * @MongoDB\EmbedOne(targetDocument="Henter\GEOBundle\Document\Coordinate")
     */
    protected $coordinate;

    /**
     * @MongoDB\Distance
     */
    public $distance;

    public function __construct()
    {
    }


    /**
     * Get id
     *
     * @return int_id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return \Place
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set coordinate
     *
     * @param Henter\GEOBundle\Document\Coordinate $coordinate
     * @return \Place
     */
    public function setCoordinate(\Henter\GEOBundle\Document\Coordinate $coordinate)
    {
        $this->coordinate = $coordinate;
        return $this;
    }

    /**
     * Get coordinate
     *
     * @return Henter\GEOBundle\Document\Coordinate $coordinate
     */
    public function getCoordinate()
    {
        return $this->coordinate;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return \Place
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set distance
     *
     * @param string $distance
     * @return self
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
        return $this;
    }

    /**
     * Get distance
     *
     * @return string $distance
     */
    public function getDistance()
    {
        return $this->distance;
    }
}
