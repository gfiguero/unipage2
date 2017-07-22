<?php

namespace Uni\AgentBundle\Menu;

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

//        $topmenu->addChild('topmenu.header', array('route' => 'agent_header_index'))->setAttributes(array('icon' => 'database fa-fw', 'translation_domain' => 'UniAgentBundle'));
//        $topmenu->addChild('topmenu.logout', array('route' => 'front_logout'))->setAttributes(array('icon' => 'sign-out fa-fw', 'translation_domain' => 'UniFrontBundle'));

        return $topmenu;
    }

    public function sideMenu(FactoryInterface $factory, array $options)
    {
        $sidemenu = $factory->createItem('root');
        $sidemenu->setCurrent($this->container->get('request')->getRequestUri());
        $sidemenu->setChildrenAttribute('class', 'metismenu');
        $sidemenu->setChildrenAttribute('id', 'side-menu');

        $sidemenu->addChild('sidemenu.budget.root', array('route' => 'agent_budget_index'))->setExtras(array('translation_domain' => 'UniAgentBundle', 'routes' => array(
            'agent_budget_index',
            'agent_budget_new',
            'agent_budget_show',
            'agent_budget_edit',
        )));
        $sidemenu->addChild('sidemenu.client.root', array('route' => 'agent_client_index'))->setExtras(array('translation_domain' => 'UniAgentBundle', 'routes' => array(
            'agent_client_index',
            'agent_client_new',
            'agent_client_show',
            'agent_client_edit',
        )));
/*
        $sidemenu->addChild('sidemenu.item.root', array('route' => 'agent_item_index'))->setExtras(array('translation_domain' => 'UniAgentBundle', 'routes' => array(
            'agent_item_index',
            'agent_item_new',
            'agent_item_show',
            'agent_item_edit',
        )));
*/
        $sidemenu->addChild('sidemenu.product.root', array('route' => 'agent_product_index'))->setExtras(array('translation_domain' => 'UniAgentBundle', 'routes' => array(
            'agent_product_index',
            'agent_product_new',
            'agent_product_show',
            'agent_product_edit',
        )));
        $sidemenu->addChild('sidemenu.provider.root', array('route' => 'agent_provider_index'))->setExtras(array('translation_domain' => 'UniAgentBundle', 'routes' => array(
            'agent_provider_index',
            'agent_provider_new',
            'agent_provider_show',
            'agent_provider_edit',
        )));
        $sidemenu->addChild('sidemenu.seller.root', array('route' => 'agent_seller_index'))->setExtras(array('translation_domain' => 'UniAgentBundle', 'routes' => array(
            'agent_seller_index',
            'agent_seller_new',
            'agent_seller_show',
            'agent_seller_edit',
        )));

        return $sidemenu;
    }

}