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
        $photographies = $em->getRepository('UniAdminBundle:Photography')->findByUser($user);

        $deleteForms = array();
        foreach($photographies as $key => $photography) {
            $deleteForms[] = $this->createDeleteForm($photography)->createView();
        }

        return $this->render('UniControlPanelBundle:Photography:index.html.twig', array(
            'photographies' => $photographies,
            'deleteForms' => $deleteForms,
        ));
    }

    public function newAction(Request $request)
    {
        $photography = new Photography();
        $newForm = $this->createForm(new PhotographyType(), $photography);
        $newForm->handleRequest($request);

        if ($newForm->isSubmitted()) {
            if($newForm->isValid()) {
                $user = $this->getUser();
                $photography->setUser($user);
                $em = $this->getDoctrine()->getManager();
                $em->persist($photography);
                $em->flush();
                $request->getSession()->getFlashBag()->add( 'success', 'photography.new.flash' );
                return $this->redirect($this->generateUrl('controlpanel_photography_index'));
            }
        }

        return $this->render('UniControlPanelBundle:Photography:new.html.twig', array(
            'newForm' => $newForm->createView(),
        ));
    }

    public function editAction(Request $request, Photography $photography)
    {
        $editForm = $this->createForm(new PhotographyType(), $photography);
        $deleteForm = $this->createDeleteForm($photography);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted()) {
            if($editForm->isValid()) {
                $user = $this->getUser();
                $photography->setUser($user);
                $em = $this->getDoctrine()->getManager();
                $em->persist($photography);
                $em->flush();
                $request->getSession()->getFlashBag()->add( 'success', 'photography.edit.flash' );
                return $this->redirect($this->generateUrl('controlpanel_photography_index'));
            }
        }

        return $this->render('UniControlPanelBundle:Photography:edit.html.twig', array(
            'photography' => $photography,
            'editForm' => $editForm->createView(),
            'deleteForm' => $deleteForm->createView(),
        ));
    }

    public function deleteAction(Request $request, Photography $photography)
    {
        $deleteForm = $this->createDeleteForm($photography);
        $deleteForm->handleRequest($request);

        if ($deleteForm->isSubmitted() && $deleteForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($photography);
            $em->flush();
            $request->getSession()->getFlashBag()->add( 'danger', 'photography.delete.flash' );
        }

        return $this->redirect($this->generateUrl('controlpanel_photography_index'));
    }

    /**
     * Creates a form to delete a Photography entity.
     *
     * @param Photography $photography The Photography entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Photography $photography)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('controlpanel_photography_delete', array('id' => $photography->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
