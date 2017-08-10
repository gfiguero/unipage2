<?php

namespace Uni\AdminBundle\Controller;

use Uni\AdminBundle\Entity\ProductSubcategory;
use Uni\AdminBundle\Form\ProductSubcategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Productsubcategory controller.
 *
 */
class ProductSubcategoryController extends Controller
{

    /**
     * Lists all ProductSubcategory entities.
     *
     */
    public function indexAction(Request $request)
    {
        $sort = $request->query->get('sort');
        $direction = $request->query->get('direction');
        $em = $this->getDoctrine()->getManager();
        if($sort) $productSubcategories = $em->getRepository('UniAdminBundle:ProductSubcategory')->findBy(array(), array($sort => $direction));
        else $productSubcategories = $em->getRepository('UniAdminBundle:ProductSubcategory')->findAll();
        $paginator = $this->get('knp_paginator');
        $productSubcategories = $paginator->paginate($productSubcategories, $request->query->getInt('page', 1), 100);

        $deleteForms = array();
        foreach($productSubcategories as $key => $productSubcategory) {
            $deleteForms[] = $this->createDeleteForm($productSubcategory)->createView();
        }

        return $this->render('UniAdminBundle:ProductSubcategory:index.html.twig', array(
            'productSubcategories' => $productSubcategories,
            'direction' => $direction,
            'sort' => $sort,
            'deleteForms' => $deleteForms,
        ));
    }

    /**
     * Creates a new ProductSubcategory entity.
     *
     */
    public function newAction(Request $request)
    {
        $productSubcategory = new ProductSubcategory();
        $newForm = $this->createNewForm($productSubcategory);
        $newForm->handleRequest($request);

        if ($newForm->isSubmitted()) {
            if($newForm->isValid()) {
                $slug = $this->get('admin.slugger')->slugify($productSubcategory->getName());
                $productSubcategory->setSlug($slug);

                $em = $this->getDoctrine()->getManager();
                $em->persist($productSubcategory);
                $em->flush();
                $request->getSession()->getFlashBag()->add( 'success', 'productSubcategory.new.flash' );
                return $this->redirect($this->generateUrl('admin_productsubcategory_index'));
            }
        }

        return $this->render('UniAdminBundle:ProductSubcategory:new.html.twig', array(
            'newForm' => $newForm->createView(),
        ));
    }

    /**
     * Creates a form to create a new ProductSubcategory entity.
     *
     * @param ProductSubcategory $productSubcategory The ProductSubcategory entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createNewForm(ProductSubcategory $productSubcategory)
    {
        return $this->createForm(new ProductSubcategoryType(), $productSubcategory, array(
            'action' => $this->generateUrl('admin_productsubcategory_new'),
        ));
    }

    /**
     * Finds and displays a ProductSubcategory entity.
     *
     */
    public function showAction(ProductSubcategory $productSubcategory)
    {
        $editForm = $this->createEditForm($productSubcategory);
        $deleteForm = $this->createDeleteForm($productSubcategory);

        return $this->render('UniAdminBundle:ProductSubcategory:show.html.twig', array(
            'productSubcategory' => $productSubcategory,
            'editForm' => $editForm->createView(),
            'deleteForm' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ProductSubcategory entity.
     *
     */
    public function editAction(Request $request, ProductSubcategory $productSubcategory)
    {
        $editForm = $this->createEditForm($productSubcategory);
        $deleteForm = $this->createDeleteForm($productSubcategory);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted()) {
            if($editForm->isValid()) {
                $slug = $this->get('admin.slugger')->slugify($productSubcategory->getName());
                $productSubcategory->setSlug($slug);
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($productSubcategory);
                $em->flush();
                $request->getSession()->getFlashBag()->add( 'success', 'productSubcategory.edit.flash' );
                return $this->redirect($this->generateUrl('admin_productsubcategory_index'));
            }
        }

        return $this->render('UniAdminBundle:ProductSubcategory:edit.html.twig', array(
            'productSubcategory' => $productSubcategory,
            'editForm' => $editForm->createView(),
            'deleteForm' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a ProductSubcategory entity.
     *
     * @param ProductSubcategory $productSubcategory The ProductSubcategory entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(ProductSubcategory $productSubcategory)
    {
        return $this->createForm(new ProductSubcategoryType(), $productSubcategory, array(
            'action' => $this->generateUrl('admin_productsubcategory_edit', array('id' => $productSubcategory->getId())),
        ));
    }

    /**
     * Deletes a ProductSubcategory entity.
     *
     */
    public function deleteAction(Request $request, ProductSubcategory $productSubcategory)
    {
        $deleteForm = $this->createDeleteForm($productSubcategory);
        $deleteForm->handleRequest($request);

        if ($deleteForm->isSubmitted() && $deleteForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($productSubcategory);
            $em->flush();
            $request->getSession()->getFlashBag()->add( 'danger', 'productSubcategory.delete.flash' );
        }

        return $this->redirect($this->generateUrl('admin_productsubcategory_index'));
    }

    /**
     * Creates a form to delete a ProductSubcategory entity.
     *
     * @param ProductSubcategory $productSubcategory The ProductSubcategory entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ProductSubcategory $productSubcategory)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_productsubcategory_delete', array('id' => $productSubcategory->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
