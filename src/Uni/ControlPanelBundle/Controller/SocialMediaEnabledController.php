<?php

namespace Uni\ControlPanelBundle\Controller;

use Uni\AdminBundle\Entity\SocialMediaEnabled;
use Uni\ControlPanelBundle\Form\SocialMediaEnabledType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * SocialMediaEnabled controller.
 *
 */
class SocialMediaEnabledController extends Controller
{
    public function indexAction(Request $request)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $socialMediaEnabledList = $em->getRepository('UniAdminBundle:SocialMediaEnabled')->findByUser($user);

        $deleteForms = array();
        foreach($socialMediaEnabledList as $key => $socialMediaEnabled) {
            $deleteForms[] = $this->createDeleteForm($socialMediaEnabled)->createView();
        }

        return $this->render('UniControlPanelBundle:SocialMediaEnabled:index.html.twig', array(
            'socialMediaEnabledList' => $socialMediaEnabledList,
            'deleteForms' => $deleteForms,
        ));
    }

    public function newAction(Request $request)
    {
        $socialMediaEnabled = new SocialMediaEnabled();
        $newForm = $this->createForm(new SocialMediaEnabledType(), $socialMediaEnabled);
        $newForm->handleRequest($request);

        if ($newForm->isSubmitted()) {
            if($newForm->isValid()) {
                $user = $this->getUser();
                $socialMediaEnabled->setUser($user);
                $em = $this->getDoctrine()->getManager();
                $em->persist($socialMediaEnabled);
                $em->flush();
                $request->getSession()->getFlashBag()->add( 'success', 'socialMediaEnabled.new.flash' );
                return $this->redirect($this->generateUrl('controlpanel_socialmediaenabled_index'));
            }
        }

        return $this->render('UniControlPanelBundle:SocialMediaEnabled:new.html.twig', array(
            'newForm' => $newForm->createView(),
        ));
    }

    public function editAction(Request $request, SocialMediaEnabled $socialMediaEnabled)
    {
        $editForm = $this->createForm(new SocialMediaEnabledType(), $socialMediaEnabled);
        $deleteForm = $this->createDeleteForm($socialMediaEnabled);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted()) {
            if($editForm->isValid()) {
                $user = $this->getUser();
                $socialMediaEnabled->setUser($user);
                $em = $this->getDoctrine()->getManager();
                $em->persist($socialMediaEnabled);
                $em->flush();
                $request->getSession()->getFlashBag()->add( 'success', 'socialMediaEnabled.edit.flash' );
                return $this->redirect($this->generateUrl('controlpanel_socialmediaenabled_index'));
            }
        }

        return $this->render('UniControlPanelBundle:SocialMediaEnabled:edit.html.twig', array(
            'socialMediaEnabled' => $socialMediaEnabled,
            'editForm' => $editForm->createView(),
            'deleteForm' => $deleteForm->createView(),
        ));
    }

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

        return $this->redirect($this->generateUrl('controlpanel_socialmediamnabled_index'));
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
            ->setAction($this->generateUrl('controlpanel_socialmediaenabled_delete', array('id' => $socialMediaEnabled->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
