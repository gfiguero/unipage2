<?php

namespace Uni\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UniUserBundle:Default:index.html.twig');
    }
}
