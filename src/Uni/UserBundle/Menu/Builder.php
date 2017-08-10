<?php

namespace Uni\UserBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function topMenu(FactoryInterface $factory, array $options)
    {
        $topmenu = $factory->createItem('root');
        $topmenu->setChildrenAttribute('class', 'nav navbar-nav navbar-nav-custom navbar-right');
        $topmenu->setChildrenAttribute('id', 'topmenu');

        $topmenu->addChild('topmenu.home', array('route' => 'uni_page_index'))->setExtras(array('translation_domain' => 'UniUserBundle'));
        $topmenu->addChild('topmenu.login', array('route' => 'fos_user_security_login'))->setExtras(array('translation_domain' => 'UniUserBundle'));

        return $topmenu;
    }

}