<?php

namespace Uni\AdminBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function topMenu(FactoryInterface $factory, array $options)
    {
        $topmenu = $factory->createItem('root');
        $topmenu->setChildrenAttribute('class', 'nav navbar-nav');
        $topmenu->setChildrenAttribute('id', 'top-menu');

//        $topmenu->addChild('topmenu.header', array('route' => 'admin_header_index'))->setAttributes(array('icon' => 'database fa-fw', 'translation_domain' => 'UniAdminBundle'));
//        $topmenu->addChild('topmenu.logout', array('route' => 'front_logout'))->setAttributes(array('icon' => 'sign-out fa-fw', 'translation_domain' => 'UniFrontBundle'));

        return $topmenu;
    }

    public function sideMenu(FactoryInterface $factory, array $options)
    {
        $sidemenu = $factory->createItem('root');
        $sidemenu->setCurrent($this->container->get('request')->getRequestUri());
        $sidemenu->setChildrenAttribute('class', 'metismenu');
        $sidemenu->setChildrenAttribute('id', 'side-menu');

        $sidemenu->addChild('sidemenu.user.root', array('route' => 'admin_user_index'))->setExtras(array('translation_domain' => 'UniAdminBundle', 'routes' => array(
            'admin_user_index',
            'admin_user_new',
            'admin_user_show',
            'admin_user_edit',
        )));

        $sidemenu->addChild('sidemenu.feature.root', array('route' => 'admin_feature_index'))->setExtras(array('translation_domain' => 'UniAdminBundle', 'routes' => array(
            'admin_feature_index',
            'admin_feature_new',
            'admin_feature_show',
            'admin_feature_edit',
        )));

        return $sidemenu;
    }

}