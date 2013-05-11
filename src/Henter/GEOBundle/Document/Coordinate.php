<?php
/**
 * File Coordinate.php
 * @henter
 * Time: 2013-04-15 11:12
 * 
 */
namespace Henter\GEOBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\EmbeddedDocument
 */
class Coordinate {

    /**
     * @MongoDB\Field(type="float")
     */
    public $longitude;

    /**
     * @MongoDB\Field(type="float")
     */
    public $latitude;

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return \Coordinate
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Get latitude
     *
     * @return float $latitude
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return \Coordinate
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Get longitude
     *
     * @return float $longitude
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
}
