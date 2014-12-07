<?php

namespace Blog\CosplayersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $allPosts = $this->getDoctrine()
            ->getRepository('BlogCosplayersBundle:Post')
            ->findAll(array('onMainPage' => 1));
        
        return $this->render('BlogCosplayersBundle:Default:index.html.twig');
    }    
    
    
    
}
