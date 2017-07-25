<?php

namespace Uni\PageBundle\Controller;

use Uni\AdminBundle\Entity\Feature;
use Uni\PageBundle\Form\FeatureType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Feature controller.
 *
 */
class FeatureController extends Controller
{

    /**
     * Lists all Feature entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $features = $em->getRepository('UniAdminBundle:Feature')->findAll();

        return $this->render('UniPageBundle:Feature:index.html.twig', array(
            'features' => $features,
        ));
    }

    /**
     * Creates a new Feature entity.
     *
     */
    public function newAction(Request $request)
    {
        $feature = new Feature();
        $newForm = $this->createNewForm($feature);
        $newForm->handleRequest($request);

        if ($newForm->isSubmitted()) {
            if($newForm->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($feature);
                $em->flush();
                $request->getSession()->getFlashBag()->add( 'success', 'feature.new.flash' );
                return $this->redirect($this->generateUrl('admin_feature_index'));
            }
        }

        return $this->render('UniAdminBundle:Feature:new.html.twig', array(
            'newForm' => $newForm->createView(),
        ));
    }

    /**
     * Creates a form to create a new Feature entity.
     *
     * @param Feature $feature The Feature entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createNewForm(Feature $feature)
    {
        return $this->createForm(new FeatureType(), $feature, array(
            'action' => $this->generateUrl('admin_feature_new'),
        ));
    }

    /**
     * Finds and displays a Feature entity.
     *
     */
    public function showAction(Feature $feature)
    {
        $editForm = $this->createEditForm($feature);
        $deleteForm = $this->createDeleteForm($feature);

        return $this->render('UniAdminBundle:Feature:show.html.twig', array(
            'feature' => $feature,
            'editForm' => $editForm->createView(),
            'deleteForm' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Feature entity.
     *
     */
    public function editAction(Request $request, Feature $feature)
    {
        $editForm = $this->createForm(new FeatureType(), $feature);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted()) {
            if($editForm->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($feature);
                $em->flush();
                $request->getSession()->getFlashBag()->add( 'success', 'feature.edit.flash' );
                return $this->redirect($this->generateUrl('page_feature_index'));
            }
        }

        return $this->render('UniPageBundle:Feature:edit.html.twig', array(
            'feature' => $feature,
            'editForm' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a Feature entity.
     *
     */
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

        return $this->redirect($this->generateUrl('admin_feature_index'));
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
            ->setAction($this->generateUrl('admin_feature_delete', array('id' => $feature->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
