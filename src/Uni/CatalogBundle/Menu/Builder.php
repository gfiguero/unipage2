<?php

namespace Uni\CatalogBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

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

        $sidemenu->addChild('sidemenu.photography.root', array('route' => 'admin_photography_index'))->setExtras(array('translation_domain' => 'UniAdminBundle', 'routes' => array(
            'admin_photography_index',
            'admin_photography_new',
            'admin_photography_show',
            'admin_photography_edit',
        )));

        $sidemenu->addChild('sidemenu.product.root', array('route' => 'admin_product_index'))->setExtras(array('translation_domain' => 'UniAdminBundle', 'routes' => array(
            'admin_product_index',
            'admin_product_new',
            'admin_product_show',
            'admin_product_edit',
        )));

        $sidemenu->addChild('sidemenu.productcategory.root', array('route' => 'admin_productcategory_index'))->setExtras(array('translation_domain' => 'UniAdminBundle', 'routes' => array(
            'admin_productcategory_index',
            'admin_productcategory_new',
            'admin_productcategory_show',
            'admin_productcategory_edit',
        )));

        $sidemenu->addChild('sidemenu.productsubcategory.root', array('route' => 'admin_productsubcategory_index'))->setExtras(array('translation_domain' => 'UniAdminBundle', 'routes' => array(
            'admin_productsubcategory_index',
            'admin_productsubcategory_new',
            'admin_productsubcategory_show',
            'admin_productsubcategory_edit',
        )));

        $sidemenu->addChild('sidemenu.socialmediaenabled.root', array('route' => 'admin_socialmediaenabled_index'))->setExtras(array('translation_domain' => 'UniAdminBundle', 'routes' => array(
            'admin_socialmediaenabled_index',
            'admin_socialmediaenabled_new',
            'admin_socialmediaenabled_show',
            'admin_socialmediaenabled_edit',
        )));

        $sidemenu->addChild('sidemenu.socialmediaavailable.root', array('route' => 'admin_socialmediaavailable_index'))->setExtras(array('translation_domain' => 'UniAdminBundle', 'routes' => array(
            'admin_socialmediaavailable_index',
            'admin_socialmediaavailable_new',
            'admin_socialmediaavailable_show',
            'admin_socialmediaavailable_edit',
        )));

        return $sidemenu;
    }

}