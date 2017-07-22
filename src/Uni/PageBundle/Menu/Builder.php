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
        $topmenu = $factory->createItem('root');
        $topmenu->setChildrenAttribute('class', 'nav navbar-nav navbar-right');
        $topmenu->setChildrenAttribute('id', 'topmenu');
        $checker = $this->container->get('security.authorization_checker');

        $topmenu->addChild('topmenu.home', array('route' => 'page_index'))->setExtras(array('translation_domain' => 'UniPageBundle'))->setLinkAttribute('class', 'page-scroll');
//        $topmenu->addChild('topmenu.about', array('uri' => '#'))->setExtras(array('translation_domain' => 'UniPageBundle'))->setLinkAttribute('class', 'page-scroll');
//        $topmenu->addChild('topmenu.feature', array('uri' => '#'))->setExtras(array('translation_domain' => 'UniPageBundle'))->setLinkAttribute('class', 'page-scroll');
//        $topmenu->addChild('topmenu.contact', array('uri' => '#'))->setExtras(array('translation_domain' => 'UniPageBundle'))->setLinkAttribute('class', 'page-scroll');
//        $topmenu->addChild('topmenu.product', array('uri' => '#'))->setExtras(array('translation_domain' => 'UniPageBundle'))->setLinkAttribute('class', 'page-scroll');

        if ($checker->isGranted('ROLE_USER')) {
            $topmenu->addChild('topmenu.logout', array('route' => 'fos_user_security_logout'))->setExtras(array('translation_domain' => 'UniPageBundle'));
        } else {
            $topmenu->addChild('topmenu.register', array('route' => 'fos_user_registration_register'))->setExtras(array('translation_domain' => 'UniPageBundle'));
            $topmenu->addChild('topmenu.login', array('route' => 'fos_user_security_login'))->setExtras(array('translation_domain' => 'UniPageBundle'));
        }

        return $topmenu;
    }

}