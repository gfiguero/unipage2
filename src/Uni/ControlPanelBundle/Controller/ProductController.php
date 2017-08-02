<?php

namespace Uni\ControlPanelBundle\Controller;

use Uni\AdminBundle\Entity\Product;
use Uni\ControlPanelBundle\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Product controller.
 *
 */
class ProductController extends Controller
{
    public function indexAction(Request $request)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('UniAdminBundle:Product')->findByUser($user);

        $deleteForms = array();
        foreach($products as $key => $product) {
            $deleteForms[] = $this->createDeleteForm($product)->createView();
        }

        return $this->render('UniControlPanelBundle:Product:index.html.twig', array(
            'products' => $products,
            'deleteForms' => $deleteForms,
        ));
    }

    public function newAction(Request $request)
    {
        $product = new Product();
        $newForm = $this->createForm(new ProductType(), $product);
        $newForm->handleRequest($request);

        if ($newForm->isSubmitted()) {
            if($newForm->isValid()) {
                $user = $this->getUser();
                $product->setUser($user);
                $em = $this->getDoctrine()->getManager();
                $em->persist($product);
                $em->flush();
                $request->getSession()->getFlashBag()->add( 'success', 'product.new.flash' );
                return $this->redirect($this->generateUrl('controlpanel_product_index'));
            }
        }

        return $this->render('UniControlPanelBundle:Product:new.html.twig', array(
            'newForm' => $newForm->createView(),
        ));
    }

    public function editAction(Request $request, Product $product)
    {
        $editForm = $this->createForm(new ProductType(), $product);
        $deleteForm = $this->createDeleteForm($product);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted()) {
            if($editForm->isValid()) {
                $user = $this->getUser();
                $product->setUser($user);
                $em = $this->getDoctrine()->getManager();
                $em->persist($product);
                $em->flush();
                $request->getSession()->getFlashBag()->add( 'success', 'product.edit.flash' );
                return $this->redirect($this->generateUrl('controlpanel_product_index'));
            }
        }

        return $this->render('UniControlPanelBundle:Product:edit.html.twig', array(
            'product' => $product,
            'editForm' => $editForm->createView(),
            'deleteForm' => $deleteForm->createView(),
        ));
    }

    public function deleteAction(Request $request, Product $product)
    {
        $deleteForm = $this->createDeleteForm($product);
        $deleteForm->handleRequest($request);

        if ($deleteForm->isSubmitted() && $deleteForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($product);
            $em->flush();
            $request->getSession()->getFlashBag()->add( 'danger', 'product.delete.flash' );
        }

        return $this->redirect($this->generateUrl('controlpanel_product_index'));
    }

    /**
     * Creates a form to delete a Product entity.
     *
     * @param Product $product The Product entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Product $product)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('controlpanel_product_delete', array('id' => $product->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
