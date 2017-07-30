<?php

namespace Uni\ControlPanelBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function topMenu(FactoryInterface $factory, array $options)
    {
        $checker = $this->container->get('security.authorization_checker');
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $topmenu = $factory->createItem('root');
        $topmenu->setChildrenAttribute('class', 'nav navbar-nav navbar-nav-custom navbar-right');
        $topmenu->setChildrenAttribute('id', 'topmenu');

        $topmenu->addChild('topmenu.home', array('route' => 'uni_page_index'))->setExtras(array('translation_domain' => 'UniControlPanelBundle'))->setLinkAttribute('class', 'page-scroll');
//        $topmenu->addChild('topmenu.about', array('uri' => '#'))->setExtras(array('translation_domain' => 'UniControlPanelBundle'))->setLinkAttribute('class', 'page-scroll');
//        $topmenu->addChild('topmenu.feature', array('uri' => '#'))->setExtras(array('translation_domain' => 'UniControlPanelBundle'))->setLinkAttribute('class', 'page-scroll');
//        $topmenu->addChild('topmenu.contact', array('uri' => '#'))->setExtras(array('translation_domain' => 'UniControlPanelBundle'))->setLinkAttribute('class', 'page-scroll');
//        $topmenu->addChild('topmenu.product', array('uri' => '#'))->setExtras(array('translation_domain' => 'UniControlPanelBundle'))->setLinkAttribute('class', 'page-scroll');

        if ($checker->isGranted('ROLE_USER')) {

            $topmenu->addChild('topmenu.user');
            $topmenu['topmenu.user']->setUri('#');
            $topmenu['topmenu.user']->setLabel($user->getEmail());
            $topmenu['topmenu.user']->setLinkAttributes(array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'role' => 'button', 'aria-haspopup' => 'true', 'aria-expanded' => 'false'));
            $topmenu['topmenu.user']->setExtras(array('dropdown' => true, 'translation_domain' => 'UniControlPanelBundle'));
            $topmenu['topmenu.user']->setChildrenAttributes(array('class' => 'dropdown-menu'));

            $topmenu['topmenu.user']->addChild('topmenu.profile', array('route' => 'fos_user_profile_edit'));
            $topmenu['topmenu.user']['topmenu.profile']->setExtras(array('translation_domain' => 'UniControlPanelBundle', 'icon' => 'user fa-fw'));

            $topmenu['topmenu.user']->addChild('topmenu.feature', array('route' => 'controlpanel_feature_index'));
            $topmenu['topmenu.user']['topmenu.feature']->setExtras(array('translation_domain' => 'UniControlPanelBundle', 'icon' => 'check-circle fa-fw'));

            $topmenu['topmenu.user']->addChild('topmenu.account', array('route' => 'controlpanel_account_edit'));
            $topmenu['topmenu.user']['topmenu.account']->setExtras(array('translation_domain' => 'UniControlPanelBundle', 'icon' => 'tasks fa-fw'));

            $topmenu['topmenu.user']->addChild('topmenu.change_password', array('route' => 'fos_user_change_password'));
            $topmenu['topmenu.user']['topmenu.change_password']->setExtras(array('translation_domain' => 'UniControlPanelBundle', 'icon' => 'unlock-alt fa-fw'));

            $topmenu['topmenu.user']->addChild('topmenu.logout', array('route' => 'fos_user_security_logout'));
            $topmenu['topmenu.user']['topmenu.logout']->setExtras(array('translation_domain' => 'UniControlPanelBundle', 'icon' => 'sign-out fa-fw'));
        } else {
//            $topmenu->addChild('topmenu.register', array('route' => 'fos_user_registration_register'))->setExtras(array('translation_domain' => 'UniControlPanelBundle'));
            $topmenu->addChild('topmenu.login', array('route' => 'fos_user_security_login'))->setExtras(array('translation_domain' => 'UniControlPanelBundle'));
        }

        return $topmenu;
    }

}