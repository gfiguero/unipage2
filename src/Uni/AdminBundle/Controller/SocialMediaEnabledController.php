<?php

namespace Uni\AdminBundle\Controller;

use Uni\AdminBundle\Entity\SocialMediaEnabled;
use Uni\AdminBundle\Form\SocialMediaEnabledType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Socialmediaenabled controller.
 *
 */
class SocialMediaEnabledController extends Controller
{

    /**
     * Lists all SocialMediaEnabled entities.
     *
     */
    public function indexAction(Request $request)
    {
        $sort = $request->query->get('sort');
        $direction = $request->query->get('direction');
        $em = $this->getDoctrine()->getManager();
        if($sort) $socialMediaEnableds = $em->getRepository('UniAdminBundle:SocialMediaEnabled')->findBy(array(), array($sort => $direction));
        else $socialMediaEnableds = $em->getRepository('UniAdminBundle:SocialMediaEnabled')->findAll();
        $paginator = $this->get('knp_paginator');
        $socialMediaEnableds = $paginator->paginate($socialMediaEnableds, $request->query->getInt('page', 1), 100);

        $deleteForms = array();
        foreach($socialMediaEnableds as $key => $socialMediaEnabled) {
            $deleteForms[] = $this->createDeleteForm($socialMediaEnabled)->createView();
        }

        return $this->render('UniAdminBundle:SocialMediaEnabled:index.html.twig', array(
            'socialMediaEnableds' => $socialMediaEnableds,
            'direction' => $direction,
            'sort' => $sort,
            'deleteForms' => $deleteForms,
        ));
    }

    /**
     * Creates a new SocialMediaEnabled entity.
     *
     */
    public function newAction(Request $request)
    {
        $socialMediaEnabled = new SocialMediaEnabled();
        $newForm = $this->createNewForm($socialMediaEnabled);
        $newForm->handleRequest($request);

        if ($newForm->isSubmitted()) {
            if($newForm->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($socialMediaEnabled);
                $em->flush();
                $request->getSession()->getFlashBag()->add( 'success', 'socialMediaEnabled.new.flash' );
                return $this->redirect($this->generateUrl('admin_socialmediaenabled_index'));
            }
        }

        return $this->render('UniAdminBundle:SocialMediaEnabled:new.html.twig', array(
            'newForm' => $newForm->createView(),
        ));
    }

    /**
     * Creates a form to create a new SocialMediaEnabled entity.
     *
     * @param SocialMediaEnabled $socialMediaEnabled The SocialMediaEnabled entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createNewForm(SocialMediaEnabled $socialMediaEnabled)
    {
        return $this->createForm(new SocialMediaEnabledType(), $socialMediaEnabled, array(
            'action' => $this->generateUrl('admin_socialmediaenabled_new'),
        ));
    }

    /**
     * Finds and displays a SocialMediaEnabled entity.
     *
     */
    public function showAction(SocialMediaEnabled $socialMediaEnabled)
    {
        $editForm = $this->createEditForm($socialMediaEnabled);
        $deleteForm = $this->createDeleteForm($socialMediaEnabled);

        return $this->render('UniAdminBundle:SocialMediaEnabled:show.html.twig', array(
            'socialMediaEnabled' => $socialMediaEnabled,
            'editForm' => $editForm->createView(),
            'deleteForm' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing SocialMediaEnabled entity.
     *
     */
    public function editAction(Request $request, SocialMediaEnabled $socialMediaEnabled)
    {
        $editForm = $this->createEditForm($socialMediaEnabled);
        $deleteForm = $this->createDeleteForm($socialMediaEnabled);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted()) {
            if($editForm->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($socialMediaEnabled);
                $em->flush();
                $request->getSession()->getFlashBag()->add( 'success', 'socialMediaEnabled.edit.flash' );
                return $this->redirect($this->generateUrl('admin_socialmediaenabled_index'));
            }
        }

        return $this->render('UniAdminBundle:SocialMediaEnabled:edit.html.twig', array(
            'socialMediaEnabled' => $socialMediaEnabled,
            'editForm' => $editForm->createView(),
            'deleteForm' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a SocialMediaEnabled entity.
     *
     * @param SocialMediaEnabled $socialMediaEnabled The SocialMediaEnabled entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(SocialMediaEnabled $socialMediaEnabled)
    {
        return $this->createForm(new SocialMediaEnabledType(), $socialMediaEnabled, array(
            'action' => $this->generateUrl('admin_socialmediaenabled_edit', array('id' => $socialMediaEnabled->getId())),
        ));
    }

    /**
     * Deletes a SocialMediaEnabled entity.
     *
     */
    public function deleteAction(Request $request, SocialMediaEnabled $socialMediaEnabled)
    {
        $deleteForm = $this->createDeleteForm($socialMediaEnabled);
        $deleteForm->handleRequest($request);

        if ($deleteForm->isSubmitted() && $deleteForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($socialMediaEnabled);
            $em->flush();
            $request->getSession()->getFlashBag()->add( 'danger', 'socialMediaEnabled.delete.flash' );
        }

        return $this->redirect($this->generateUrl('admin_socialmediaenabled_index'));
    }

    /**
     * Creates a form to delete a SocialMediaEnabled entity.
     *
     * @param SocialMediaEnabled $socialMediaEnabled The SocialMediaEnabled entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(SocialMediaEnabled $socialMediaEnabled)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_socialmediaenabled_delete', array('id' => $socialMediaEnabled->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
