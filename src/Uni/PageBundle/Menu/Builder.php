<?php

namespace Uni\PageBundle\Menu;

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
        $topmenu->setChildrenAttribute('class', 'nav navbar-nav navbar-right');
        $topmenu->setChildrenAttribute('id', 'topmenu');

        $topmenu->addChild('topmenu.home', array('route' => 'page_index'))->setExtras(array('translation_domain' => 'UniPageBundle'))->setLinkAttribute('class', 'page-scroll');
//        $topmenu->addChild('topmenu.about', array('uri' => '#'))->setExtras(array('translation_domain' => 'UniPageBundle'))->setLinkAttribute('class', 'page-scroll');
//        $topmenu->addChild('topmenu.feature', array('uri' => '#'))->setExtras(array('translation_domain' => 'UniPageBundle'))->setLinkAttribute('class', 'page-scroll');
//        $topmenu->addChild('topmenu.contact', array('uri' => '#'))->setExtras(array('translation_domain' => 'UniPageBundle'))->setLinkAttribute('class', 'page-scroll');
//        $topmenu->addChild('topmenu.product', array('uri' => '#'))->setExtras(array('translation_domain' => 'UniPageBundle'))->setLinkAttribute('class', 'page-scroll');

        if ($checker->isGranted('ROLE_USER')) {
            $topmenu->addChild('topmenu.user');
            $topmenu['topmenu.user']->setUri('#');
            $topmenu['topmenu.user']->setLabel($user->getEmail());
            $topmenu['topmenu.user']->setLinkAttributes(array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'role' => 'button', 'aria-haspopup' => 'true', 'aria-expanded' => 'false'));
            $topmenu['topmenu.user']->setExtras(array('dropdown' => true, 'translation_domain' => 'UniPageBundle'));
            $topmenu['topmenu.user']->setChildrenAttributes(array('class' => 'dropdown-menu'));

            $topmenu['topmenu.user']->addChild('topmenu.profile', array('route' => 'fos_user_profile_show'));
            $topmenu['topmenu.user']['topmenu.profile']->setExtras(array('translation_domain' => 'UniPageBundle', 'icon' => 'user fa-fw'));

            $topmenu['topmenu.user']->addChild('topmenu.change_password', array('route' => 'fos_user_change_password'));
            $topmenu['topmenu.user']['topmenu.change_password']->setExtras(array('translation_domain' => 'UniPageBundle', 'icon' => 'unlock-alt fa-fw'));

            $topmenu['topmenu.user']->addChild('topmenu.logout', array('route' => 'fos_user_security_logout'));
            $topmenu['topmenu.user']['topmenu.logout']->setExtras(array('translation_domain' => 'UniPageBundle', 'icon' => 'sign-out fa-fw'));
        } else {
            $topmenu->addChild('topmenu.register', array('route' => 'fos_user_registration_register'))->setExtras(array('translation_domain' => 'UniPageBundle'));
            $topmenu->addChild('topmenu.login', array('route' => 'fos_user_security_login'))->setExtras(array('translation_domain' => 'UniPageBundle'));
        }

        return $topmenu;
    }

}