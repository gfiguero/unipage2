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
        $user = $em->getRepository('UniAdminBundle:User')->findOneByDomain($this->getRequest()->getHost());
        $photographies = $em->getRepository('UniAdminBundle:Photography')->findByUser($user);
        $features = $em->getRepository('UniAdminBundle:Feature')->findByUser($user);
        shuffle($photographies);
        return $this->render('UniPageBundle:Page:index.html.twig', array(
            'features' => $features,
            'photographies' => $photographies,
            'user' => $user,
        ));
    }
}
