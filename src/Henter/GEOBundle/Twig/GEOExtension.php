<?php
/*
 * Twig模板扩展 filter
 * @henter
 */

namespace Henter\GEOBundle\Twig;


use Henter\GEOBundle\Document\Coordinate;

class GEOExtension extends \Twig_Extension
{
    private $container;

    public function __construct($container)
    {
		$this->container = $container;
    }

    public function getFilters()
    {
        return array(
            'distance' => new \Twig_Filter_Method($this, 'distanceFilter'),
            'coordinate' => new \Twig_Filter_Method($this, 'coordinateFilter'),
            'lon' => new \Twig_Filter_Method($this, 'lonFilter'),
            'lat' => new \Twig_Filter_Method($this, 'latFilter'),
        );
    }
    public function getName()
    {
        return 'geo_extension';
    }

    public function distanceFilter($dis, $precision = 2){
        return round($dis*1000, $precision);
    }

    public function coordinateFilter(Coordinate $coordinate, $type = null){
        list($lon, $lat) = $this->container->get('geo.location')->WGStoGCJ($coordinate->getLongitude(), $coordinate->getLatitude());
        $coordinate->setLatitude($lat);
        $coordinate->setLongitude($lon);

        if($type == 'lat')
            return $lat;

        if($type == 'lon')
            return $lon;

        return $coordinate;
    }
    public function lonFilter($lon){
        list($lon, $lat) = $this->container->get('geo.location')->WGStoGCJ($lon, '31.2');

        return $lon;
    }
    public function latFilter($lat){
        list($lon, $lat) = $this->container->get('geo.location')->WGStoGCJ('121.4', $lat);

        return $lat;
    }
}
