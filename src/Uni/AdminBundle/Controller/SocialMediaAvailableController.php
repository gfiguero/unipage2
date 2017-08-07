<?php

namespace Uni\AdminBundle\Controller;

use Uni\AdminBundle\Entity\SocialMediaAvailable;
use Uni\AdminBundle\Form\SocialMediaAvailableType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Socialmediaavailable controller.
 *
 */
class SocialMediaAvailableController extends Controller
{

    /**
     * Lists all SocialMediaAvailable entities.
     *
     */
    public function indexAction(Request $request)
    {
        $sort = $request->query->get('sort');
        $direction = $request->query->get('direction');
        $em = $this->getDoctrine()->getManager();
        if($sort) $socialMediaAvailables = $em->getRepository('UniAdminBundle:SocialMediaAvailable')->findBy(array(), array($sort => $direction));
        else $socialMediaAvailables = $em->getRepository('UniAdminBundle:SocialMediaAvailable')->findAll();
        $paginator = $this->get('knp_paginator');
        $socialMediaAvailables = $paginator->paginate($socialMediaAvailables, $request->query->getInt('page', 1), 100);

        $deleteForms = array();
        foreach($socialMediaAvailables as $key => $socialMediaAvailable) {
            $deleteForms[] = $this->createDeleteForm($socialMediaAvailable)->createView();
        }

        return $this->render('UniAdminBundle:SocialMediaAvailable:index.html.twig', array(
            'socialMediaAvailables' => $socialMediaAvailables,
            'direction' => $direction,
            'sort' => $sort,
            'deleteForms' => $deleteForms,
        ));
    }

    /**
     * Creates a new SocialMediaAvailable entity.
     *
     */
    public function newAction(Request $request)
    {
        $socialMediaAvailable = new SocialMediaAvailable();
        $newForm = $this->createNewForm($socialMediaAvailable);
        $newForm->handleRequest($request);

        if ($newForm->isSubmitted()) {
            if($newForm->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($socialMediaAvailable);
                $em->flush();
                $request->getSession()->getFlashBag()->add( 'success', 'socialMediaAvailable.new.flash' );
                return $this->redirect($this->generateUrl('admin_socialmediaavailable_index'));
            }
        }

        return $this->render('UniAdminBundle:SocialMediaAvailable:new.html.twig', array(
            'newForm' => $newForm->createView(),
        ));
    }

    /**
     * Creates a form to create a new SocialMediaAvailable entity.
     *
     * @param SocialMediaAvailable $socialMediaAvailable The SocialMediaAvailable entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createNewForm(SocialMediaAvailable $socialMediaAvailable)
    {
        return $this->createForm(new SocialMediaAvailableType(), $socialMediaAvailable, array(
            'action' => $this->generateUrl('admin_socialmediaavailable_new'),
        ));
    }

    /**
     * Finds and displays a SocialMediaAvailable entity.
     *
     */
    public function showAction(SocialMediaAvailable $socialMediaAvailable)
    {
        $editForm = $this->createEditForm($socialMediaAvailable);
        $deleteForm = $this->createDeleteForm($socialMediaAvailable);

        return $this->render('UniAdminBundle:SocialMediaAvailable:show.html.twig', array(
            'socialMediaAvailable' => $socialMediaAvailable,
            'editForm' => $editForm->createView(),
            'deleteForm' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing SocialMediaAvailable entity.
     *
     */
    public function editAction(Request $request, SocialMediaAvailable $socialMediaAvailable)
    {
        $editForm = $this->createEditForm($socialMediaAvailable);
        $deleteForm = $this->createDeleteForm($socialMediaAvailable);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted()) {
            if($editForm->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($socialMediaAvailable);
                $em->flush();
                $request->getSession()->getFlashBag()->add( 'success', 'socialMediaAvailable.edit.flash' );
                return $this->redirect($this->generateUrl('admin_socialmediaavailable_index'));
            }
        }

        return $this->render('UniAdminBundle:SocialMediaAvailable:edit.html.twig', array(
            'socialMediaAvailable' => $socialMediaAvailable,
            'editForm' => $editForm->createView(),
            'deleteForm' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a SocialMediaAvailable entity.
     *
     * @param SocialMediaAvailable $socialMediaAvailable The SocialMediaAvailable entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(SocialMediaAvailable $socialMediaAvailable)
    {
        return $this->createForm(new SocialMediaAvailableType(), $socialMediaAvailable, array(
            'action' => $this->generateUrl('admin_socialmediaavailable_edit', array('id' => $socialMediaAvailable->getId())),
        ));
    }

    /**
     * Deletes a SocialMediaAvailable entity.
     *
     */
    public function deleteAction(Request $request, SocialMediaAvailable $socialMediaAvailable)
    {
        $deleteForm = $this->createDeleteForm($socialMediaAvailable);
        $deleteForm->handleRequest($request);

        if ($deleteForm->isSubmitted() && $deleteForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($socialMediaAvailable);
            $em->flush();
            $request->getSession()->getFlashBag()->add( 'danger', 'socialMediaAvailable.delete.flash' );
        }

        return $this->redirect($this->generateUrl('admin_socialmediaavailable_index'));
    }

    /**
     * Creates a form to delete a SocialMediaAvailable entity.
     *
     * @param SocialMediaAvailable $socialMediaAvailable The SocialMediaAvailable entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(SocialMediaAvailable $socialMediaAvailable)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_socialmediaavailable_delete', array('id' => $socialMediaAvailable->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
