<?php
namespace Henter\GEOBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class BaseController extends Controller
{
    /**
     * @return \Doctrine\ODM\MongoDB\DocumentRepository
     */
    public function getDMService(){
        return $this->get('doctrine_mongodb');
    }

    /**
     * @return \Doctrine\ODM\MongoDB\DocumentRepository
     */
    public function getDMManager(){
        return $this->get('doctrine_mongodb')->getManager();
    }

    /**
     * @return \Doctrine\ODM\MongoDB\DocumentRepository
     */
    public function getDoctrineManager(){
        return $this->get('doctrine_mongodb');
    }

    /**
     * @return \Henter\GEOBundle\Repository\PlaceRepository
     */
    public function getPlaceRepository(){
        return $this->get('doctrine_mongodb')->getRepository('HenterGEOBundle:Place');
    }

    /**
     * @param string $action
     * @param string $value
     */
    protected function setFlash($action, $value)
    {
        $this->get('session')->setFlash($action, $value);
    }


}