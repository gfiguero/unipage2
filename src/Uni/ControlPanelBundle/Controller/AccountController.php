<?php

namespace Uni\ControlPanelBundle\Controller;

use Uni\AdminBundle\Entity\User;
use Uni\ControlPanelBundle\Form\AccountType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AccountController extends Controller
{
    public function editAction(Request $request)
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
                return $this->redirect($this->generateUrl('controlpanel_account_edit'));
            }
        }
        return $this->render('UniControlPanelBundle:Account:edit.html.twig', array(
            'editForm' => $editForm->createView(),
        ));
    }
}
