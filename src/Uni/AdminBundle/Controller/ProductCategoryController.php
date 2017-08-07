<?php

namespace Uni\AdminBundle\Controller;

use Uni\AdminBundle\Entity\ProductCategory;
use Uni\AdminBundle\Form\ProductCategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Productcategory controller.
 *
 */
class ProductCategoryController extends Controller
{

    /**
     * Lists all ProductCategory entities.
     *
     */
    public function indexAction(Request $request)
    {
        $sort = $request->query->get('sort');
        $direction = $request->query->get('direction');
        $em = $this->getDoctrine()->getManager();
        if($sort) $productCategories = $em->getRepository('UniAdminBundle:ProductCategory')->findBy(array(), array($sort => $direction));
        else $productCategories = $em->getRepository('UniAdminBundle:ProductCategory')->findAll();
        $paginator = $this->get('knp_paginator');
        $productCategories = $paginator->paginate($productCategories, $request->query->getInt('page', 1), 100);

        $deleteForms = array();
        foreach($productCategories as $key => $productCategory) {
            $deleteForms[] = $this->createDeleteForm($productCategory)->createView();
        }

        return $this->render('UniAdminBundle:ProductCategory:index.html.twig', array(
            'productCategories' => $productCategories,
            'direction' => $direction,
            'sort' => $sort,
            'deleteForms' => $deleteForms,
        ));
    }

    /**
     * Creates a new ProductCategory entity.
     *
     */
    public function newAction(Request $request)
    {
        $productCategory = new ProductCategory();
        $newForm = $this->createNewForm($productCategory);
        $newForm->handleRequest($request);

        if ($newForm->isSubmitted()) {
            if($newForm->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($productCategory);
                $em->flush();
                $request->getSession()->getFlashBag()->add( 'success', 'productCategory.new.flash' );
                return $this->redirect($this->generateUrl('admin_productcategory_index'));
            }
        }

        return $this->render('UniAdminBundle:ProductCategory:new.html.twig', array(
            'newForm' => $newForm->createView(),
        ));
    }

    /**
     * Creates a form to create a new ProductCategory entity.
     *
     * @param ProductCategory $productCategory The ProductCategory entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createNewForm(ProductCategory $productCategory)
    {
        return $this->createForm(new ProductCategoryType(), $productCategory, array(
            'action' => $this->generateUrl('admin_productcategory_new'),
        ));
    }

    /**
     * Finds and displays a ProductCategory entity.
     *
     */
    public function showAction(ProductCategory $productCategory)
    {
        $editForm = $this->createEditForm($productCategory);
        $deleteForm = $this->createDeleteForm($productCategory);

        return $this->render('UniAdminBundle:ProductCategory:show.html.twig', array(
            'productCategory' => $productCategory,
            'editForm' => $editForm->createView(),
            'deleteForm' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ProductCategory entity.
     *
     */
    public function editAction(Request $request, ProductCategory $productCategory)
    {
        $editForm = $this->createEditForm($productCategory);
        $deleteForm = $this->createDeleteForm($productCategory);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted()) {
            if($editForm->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($productCategory);
                $em->flush();
                $request->getSession()->getFlashBag()->add( 'success', 'productCategory.edit.flash' );
                return $this->redirect($this->generateUrl('admin_productcategory_index'));
            }
        }

        return $this->render('UniAdminBundle:ProductCategory:edit.html.twig', array(
            'productCategory' => $productCategory,
            'editForm' => $editForm->createView(),
            'deleteForm' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a ProductCategory entity.
     *
     * @param ProductCategory $productCategory The ProductCategory entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(ProductCategory $productCategory)
    {
        return $this->createForm(new ProductCategoryType(), $productCategory, array(
            'action' => $this->generateUrl('admin_productcategory_edit', array('id' => $productCategory->getId())),
        ));
    }

    /**
     * Deletes a ProductCategory entity.
     *
     */
    public function deleteAction(Request $request, ProductCategory $productCategory)
    {
        $deleteForm = $this->createDeleteForm($productCategory);
        $deleteForm->handleRequest($request);

        if ($deleteForm->isSubmitted() && $deleteForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($productCategory);
            $em->flush();
            $request->getSession()->getFlashBag()->add( 'danger', 'productCategory.delete.flash' );
        }

        return $this->redirect($this->generateUrl('admin_productcategory_index'));
    }

    /**
     * Creates a form to delete a ProductCategory entity.
     *
     * @param ProductCategory $productCategory The ProductCategory entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ProductCategory $productCategory)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_productcategory_delete', array('id' => $productCategory->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
