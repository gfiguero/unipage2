<?php

namespace Uni\ControlPanelBundle\Controller;

use Uni\AdminBundle\Entity\User;
use Uni\ControlPanelBundle\Form\AccountType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Model\UserInterface as FOSUserInterface;
use Symfony\Component\Security\Core\User\UserInterface as CoreUserInterface;

class AccountController extends Controller
{
    public function editAction(Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof FOSUserInterface) {
            if($user instanceof CoreUserInterface) {
                return $this->redirect($this->generateUrl('admin_user_index'));
            }
            throw new AccessDeniedException('This user does not have access to this section.');
        }

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
