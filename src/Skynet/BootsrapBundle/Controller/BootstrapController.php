<?php

namespace Skynet\BootsrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class BootstrapController extends Controller
{
    /**
     * @Route("/bootstrap")
     * @Template()
     * @return array()
     */
    public function indexAction()
    {
        $name = 'adf';

        return array('name' => $name);

//        $request = $this->container->get('request');
//        var_dump($request->getSession()->getName());
//        var_dump($request->getClientIp());



//        return array('ip' => $request->getClientIp());
    }

}
