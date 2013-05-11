<?php
/*
 * Twig模板扩展 filter
 * @henter
 */

namespace Henter\GEOBundle\Twig;


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
        );
    }
    public function getName()
    {
        return 'geo_extension';
    }

    public function distanceFilter($dis, $precision = 2){
        return round($dis*1000, $precision);
    }

}
