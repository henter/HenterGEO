<?php

namespace Henter\GEOBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;


/**
 * @Route("/")
 */
class PlaceController extends BaseController
{


    /**
     * home
     * @Route("/", name="home")
     * @Template()
     */
    public function indexAction(){

        return array();
    }

    /**
     * home
     * @Route("/api/{type}", name="api")
     * @Template()
     */
    public function apiAction($type = 'near', $raw = false){
        $request = $this->getRequest();

        $latitude = (float)$request->get('lat');
        $longitude = (float)$request->get('lon');
        $max = (float)$request->get('max');
        $num = (float)$request->get('num');

        // 2km
        $max = $max ?: 2/111;

        $repo = $this->getPlaceRepository();

        if($type == 'near'){
            $places = $repo->createQueryBuilder()
            ->field('coordinate')->near($longitude, $latitude)
            ->maxDistance($max)
            ->getQuery();
        }elseif($type == 'center'){
            $places = $repo->createQueryBuilder()
                ->field('coordinate')->withinCenter($longitude, $latitude, $max)
                ->getQuery();

        }elseif($type == 'box'){
            $latitude2 = (float)$request->get('lat2');
            $longitude2 = (float)$request->get('lon2');

            $places = $repo->createQueryBuilder()
                ->field('coordinate')->withinBox($longitude, $latitude, $longitude2, $latitude2)
                ->getQuery();
        }

        $return = [];
        foreach($places as $place){
            $item = [];
            $item['tiitle'] = $place->getTitle();
            $item['address'] = $place->getAddress();
            $item['longitude'] = $place->getCoordinate()->getLongitude();
            $item['latitude'] = $place->getCoordinate()->getLatitude();
            $return[] = $item;
        }

        return new JsonResponse($return);
    }


    /**
     * @Route("/near", name="near")
     * @Template()
     */
    public function nearAction(){
        $request = $this->getRequest();

        $longitude = (float)$request->get('lon',121.4905);
        $latitude = (float)$request->get('lat',31.2646);
        //2km
        $max = (float)$request->get('max', 2);

        $places = $this->getPlaceRepository()->createQueryBuilder()
            ->field('coordinate')->near($longitude, $latitude)
            ->maxDistance($max/111)
            ->getQuery()->toarray();

        return compact('places','max','longitude','latitude');
    }


    /**
     * @Route("/center", name="center")
     * @Template()
     */
    public function centerAction(){
        $request = $this->getRequest();

        $longitude = (float)$request->get('lon',121.4905);
        $latitude = (float)$request->get('lat',31.2646);
        //10km
        $max = (float)$request->get('max', 10);

        $places = $this->getPlaceRepository()->createQueryBuilder()
            ->field('coordinate')->withinCenter($longitude, $latitude, $max/111)
            ->getQuery()->toarray();

        return compact('places','max','longitude','latitude');
    }


    /**
     * @Route("/box", name="box")
     * @Template()
     */
    public function boxAction(){
        $request = $this->getRequest();

        $longitude = (float)$request->get('lon',121.462035);
        $latitude = (float)$request->get('lat',31.237641);

        $longitude2 = (float)$request->get('lon2',121.522098);
        $latitude2 = (float)$request->get('lat2',31.215284);

        $places = $this->getPlaceRepository()->createQueryBuilder()
            ->field('coordinate')->withinBox($longitude, $latitude, $longitude2, $latitude2)
            ->getQuery()->toarray();

        return compact('places','longitude','latitude', 'longitude2', 'latitude2');
    }


    /**
     * @Route("/polygon", name="polygon")
     * @Template()
     */
    public function polygonAction(){
        $points = [];
        $points[] = [121.45183,31.243816];
        $points[] = [121.533181,31.24344];
        $points[] = [121.535049,31.208983];
        $points[] = [121.448955,31.214913];
        $points[] = [121.440619,31.228748];

        $sumlon = $sumlat = 0;
        foreach($points as $p){
            $sumlon += $p[0];
            $sumlat += $p[1];
        }
        $center = [$sumlon/count($points), $sumlat/count($points)];

        $places = $this->getPlaceRepository()->createQueryBuilder()
            ->field('coordinate')->withinPolygon($points[0], $points[1], $points[2], $points[3], $points[4])
            ->getQuery()->toarray();

        return compact('places','points', 'center');
    }


    /**
     * @Route("/geonear", name="geonear")
     * @Template()
     */
    public function geonearAction(){
        $request = $this->getRequest();

        $longitude = (float)$request->get('lon',121.4905);
        $latitude = (float)$request->get('lat',31.2646);
        //2km
        $max = (float)$request->get('max', 2);

        $places = $this->getPlaceRepository()->createQueryBuilder()
            ->field('coordinate')->geoNear($longitude, $latitude)
            ->spherical(true)
            ->maxDistance($max/6371)
            ->getQuery()->toarray();

        return compact('places','longitude', 'latitude', 'max');
    }



    /**
     * @Route("/distance", name="distance")
     * @Template()
     */
    public function distanceAction(){
        $request = $this->getRequest();

        $longitude = (float)$request->get('lon',121.4905);
        $latitude = (float)$request->get('lat',31.2646);
        //2km
        $max = (float)$request->get('max', 2);

        $places = $this->getPlaceRepository()->createQueryBuilder()
            ->field('coordinate')
            ->geoNear($longitude, $latitude)
            ->spherical(true)
            ->distanceMultiplier(6371)
            ->maxDistance($max/6371)
            ->limit(100)
            ->getQuery()
            ->execute()
            ->toArray()
        ;

        return compact('places','longitude', 'latitude', 'max');
    }



    /**
     * @Route("/geointersect", name="geointersect")
     * @Template()
     */
    public function geointersectAction(){
        //doctrine do not support geointersect yet, coordinates below are just for demo
        $points = [];
        $points[] = [121.45183,31.243816];
        $points[] = [121.533181,31.24344];
        $points[] = [121.535049,31.208983];
        $points[] = [121.45183,31.243816];


        $places = include dirname(__DIR__).'/Command/geointersects.php';


        $longitude = '121.4905';
        $latitude = '31.2646';
        return compact('places','points','longitude', 'latitude');
    }
}
