<?php

namespace Uni\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Uni\AdminBundle\Entity\Photography;
use Uni\AdminBundle\Entity\Header;
use Uni\AdminBundle\Entity\Contact;
use Uni\AdminBundle\Entity\Brand;
use Uni\AdminBundle\Entity\Feature;

class PageController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UniAdminBundle:User')->findOneByAbsoluteurl($this->getRequest()->getHost());
        return $this->render('UniPageBundle:Page:index.html.twig', array(
            'user' => $user,
        ));
    }
}
