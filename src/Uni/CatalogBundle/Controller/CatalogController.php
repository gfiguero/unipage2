<?php

namespace Uni\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CatalogController extends Controller
{
    public function productAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UniAdminBundle:User')->findOneByDomain($this->getRequest()->getHost());
        $products = $em->getRepository('UniAdminBundle:Product')->findByUser($user);
        return $this->render('UniCatalogBundle:Catalog:catalog.html.twig', array(
            'products' => $products,
            'user' => $user,
        ));
    }
}
