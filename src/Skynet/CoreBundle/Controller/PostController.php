<?php

namespace Skynet\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Show the Post index
 *
 * @return array
 *
 * Class PostController
 */
class PostController extends Controller
{
    /**
     * @Route("/post")
     * @Template()
     */
    public function indexAction()
    {
        $posts = $this->getDoctrine()->getRepository('ModelBundle:Post')->findAll();

        return array(
            'posts' => $posts,
            );    }

}
