<?php

namespace Skynet\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends Controller
{
    /**
     * @Route("/news")
     * @Template()
     */
    public function indexAction()
    {
        //return array('name' => $name);
        //return $this->render('News/index.html.twig');
        //
        return array(
            'name' => 'Чето тама',
        );

//        return array(
//            'name' => $name,
//
//        );

        //return array(
        //    'title' => $title,
        //    'body' => $body,
        //    'createdAt' => $createdAt;
        //);
    }
}
