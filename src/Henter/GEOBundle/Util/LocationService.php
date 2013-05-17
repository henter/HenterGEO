<?php

namespace Henter\GEOBundle\Util;

use Symfony\Component\DependencyInjection\ContainerAware;

class LocationService extends ContainerAware {

    //
    // Krasovsky 1940
    //
    // a = 6378245.0, 1/f = 298.3
    const M_A = 6378245.0;

    // b = a * (1 - f)
    // ee = (a^2 - b^2) / a^2;
    const M_EE = 0.00669342162296594323;


    public function WGStoGCJ($lon, $lat){
        if($this->isOutChina($lon, $lat)){
            return [$lon, $lat];
        }

        $offsetLon = $this->convertLon($lon - 105.0, $lat - 35.0);
        $offsetLat = $this->convertLat($lon - 105.0, $lat - 35.0);
        
        $radLat = $lat / 180.0 * M_PI;
        $magic = sin($radLat);
        $magic = 1 - self::M_EE * $magic * $magic;
        $sqrtMagic = sqrt($magic);

        $offsetLon = ($offsetLon * 180.0) / 
                (self::M_A / $sqrtMagic * cos($radLat) * M_PI);

        $offsetLat = ($offsetLat * 180.0) / 
                ((self::M_A * (1 - self::M_EE)) / ($magic * $sqrtMagic) * M_PI);

        return [$lon + $offsetLon, $lat + $offsetLat];
    }

    public function isOutChina($lon, $lat){
        if ($lon < 72.004 || $lon > 137.8347){
            return true;
        }

        if ($lat < 0.8293 || $lat > 55.8271){
            return true;
        }

        return false;
    }

    protected function convertLon($x, $y){
        $ret = 300.0 + $x + 2.0 * $y + 0.1 * $x * $x + 
                0.1 * $x * $y + 0.1 * sqrt(abs($x));

        $ret += (20.0 * sin(6.0 * $x * M_PI) + 
                20.0 * sin(2.0 * $x * M_PI)) * 2.0 / 3.0;
        
        $ret += (20.0 * sin($x * M_PI) + 
                40.0 * sin($x / 3.0 * M_PI)) * 2.0 / 3.0;

        $ret += (150.0 * sin($x / 12.0 * M_PI) + 
                300.0 * sin($x / 30.0 * M_PI)) * 2.0 / 3.0;

        return $ret; 
    }

    protected function convertLat($x, $y){
        $ret = -100.0 + 2.0 * $x + 3.0 * $y + 0.2 * $y * $y + 
                0.1 * $x * $y + 0.2 * sqrt(abs($x));

        $ret += (20.0 * sin(6.0 * $x * M_PI) + 
                20.0 * sin(2.0 * $x * M_PI)) * 2.0 / 3.0;

        $ret += (20.0 * sin($y * M_PI) + 
                40.0 * sin($y / 3.0 * M_PI)) * 2.0 / 3.0;

        $ret += (160.0 * sin($y / 12.0 * M_PI) + 
                320 * sin($y * M_PI / 30.0)) * 2.0 / 3.0;

        return $ret;
    }
}
