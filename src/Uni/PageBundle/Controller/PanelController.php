<?php

namespace Uni\PageBundle\Controller;

use Uni\AdminBundle\Entity\User;
use Uni\PageBundle\Form\AccountType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PanelController extends Controller
{
    public function editAccountAction(Request $request)
    {
        $user = $this->getUser();
        $editForm = $this->createForm(new AccountType(), $user);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted()) {
            if($editForm->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                $request->getSession()->getFlashBag()->add( 'success', 'account.edit.flash' );
                return $this->redirect($this->generateUrl('panel_account_edit'));
            }
        }
        return $this->render('UniPageBundle:Panel:account.html.twig', array(
            'editForm' => $editForm->createView(),
        ));
    }
}
