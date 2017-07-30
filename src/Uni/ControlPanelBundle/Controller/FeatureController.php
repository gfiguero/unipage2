<?php

namespace Uni\ControlPanelBundle\Controller;

use Uni\AdminBundle\Entity\Feature;
use Uni\ControlPanelBundle\Form\FeatureType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Feature controller.
 *
 */
class FeatureController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $features = $em->getRepository('UniAdminBundle:Feature')->findAll();

        $deleteForms = array();
        foreach($features as $key => $feature) {
            $deleteForms[] = $this->createDeleteForm($feature)->createView();
        }

        return $this->render('UniControlPanelBundle:Feature:index.html.twig', array(
            'features' => $features,
            'deleteForms' => $deleteForms,
        ));
    }

    public function newAction(Request $request)
    {
        $feature = new Feature();
        $newForm = $this->createForm(new FeatureType(), $feature);
        $newForm->handleRequest($request);

        if ($newForm->isSubmitted()) {
            if($newForm->isValid()) {
                $user = $this->getUser();
                $feature->setUser($user);
                $em = $this->getDoctrine()->getManager();
                $em->persist($feature);
                $em->flush();
                $request->getSession()->getFlashBag()->add( 'success', 'feature.new.flash' );
                return $this->redirect($this->generateUrl('controlpanel_feature_index'));
            }
        }

        return $this->render('UniControlPanelBundle:Feature:new.html.twig', array(
            'newForm' => $newForm->createView(),
        ));
    }

    public function editAction(Request $request, Feature $feature)
    {
        $editForm = $this->createForm(new FeatureType(), $feature);
        $deleteForm = $this->createDeleteForm($feature);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted()) {
            if($editForm->isValid()) {
                $user = $this->getUser();
                $feature->setUser($user);
                $em = $this->getDoctrine()->getManager();
                $em->persist($feature);
                $em->flush();
                $request->getSession()->getFlashBag()->add( 'success', 'feature.edit.flash' );
                return $this->redirect($this->generateUrl('controlpanel_feature_index'));
            }
        }

        return $this->render('UniControlPanelBundle:Feature:edit.html.twig', array(
            'feature' => $feature,
            'editForm' => $editForm->createView(),
            'deleteForm' => $deleteForm->createView(),
        ));
    }

    public function deleteAction(Request $request, Feature $feature)
    {
        $deleteForm = $this->createDeleteForm($feature);
        $deleteForm->handleRequest($request);

        if ($deleteForm->isSubmitted() && $deleteForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($feature);
            $em->flush();
            $request->getSession()->getFlashBag()->add( 'danger', 'feature.delete.flash' );
        }

        return $this->redirect($this->generateUrl('controlpanel_feature_index'));
    }

    /**
     * Creates a form to delete a Feature entity.
     *
     * @param Feature $feature The Feature entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Feature $feature)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('controlpanel_feature_delete', array('id' => $feature->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
