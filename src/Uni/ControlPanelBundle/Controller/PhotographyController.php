<?php

namespace Uni\ControlPanelBundle\Controller;

use Uni\AdminBundle\Entity\Photography;
use Uni\ControlPanelBundle\Form\PhotographyType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Photography controller.
 *
 */
class PhotographyController extends Controller
{
    public function indexAction(Request $request)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $features = $em->getRepository('UniAdminBundle:Photography')->findByUser($user);

        $deleteForms = array();
        foreach($features as $key => $feature) {
            $deleteForms[] = $this->createDeleteForm($feature)->createView();
        }

        return $this->render('UniControlPanelBundle:Photography:index.html.twig', array(
            'features' => $features,
            'deleteForms' => $deleteForms,
        ));
    }

    public function newAction(Request $request)
    {
        $feature = new Photography();
        $newForm = $this->createForm(new PhotographyType(), $feature);
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

        return $this->render('UniControlPanelBundle:Photography:new.html.twig', array(
            'newForm' => $newForm->createView(),
        ));
    }

    public function editAction(Request $request, Photography $feature)
    {
        $editForm = $this->createForm(new PhotographyType(), $feature);
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

        return $this->render('UniControlPanelBundle:Photography:edit.html.twig', array(
            'feature' => $feature,
            'editForm' => $editForm->createView(),
            'deleteForm' => $deleteForm->createView(),
        ));
    }

    public function deleteAction(Request $request, Photography $feature)
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
     * Creates a form to delete a Photography entity.
     *
     * @param Photography $feature The Photography entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Photography $feature)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('controlpanel_feature_delete', array('id' => $feature->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
