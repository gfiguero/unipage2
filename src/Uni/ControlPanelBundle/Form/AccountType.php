<?php

namespace Uni\ControlPanelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AccountType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder 
            ->add('brand', null, array(
                'label' => 'user.form.brand',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniControlPanelBundle',
            ))
            ->add('name', null, array(
                'label' => 'user.form.name',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniControlPanelBundle',
            ))
            ->add('domain', null, array(
                'label' => 'user.form.domain',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniControlPanelBundle',
            ))
            ->add('brand_primary_color', null, array(
                'label' => 'user.form.brandprimarycolor',
                'translation_domain' => 'UniControlPanelBundle',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
            ))
            ->add('brand_secondary_color', null, array(
                'label' => 'user.form.brandsecondarycolor',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniControlPanelBundle',
            ))
            ->add('brand_tertiary_color', null, array(
                'label' => 'user.form.brandtertiarycolor',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniControlPanelBundle',
            ))
            ->add('clientname', null, array(
                'label' => 'user.form.clientname',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniControlPanelBundle',
            ))
            ->add('clientphone', null, array(
                'label' => 'user.form.clientphone',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniControlPanelBundle',
            ))
            ->add('clientemail', null, array(
                'label' => 'user.form.clientemail',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniControlPanelBundle',
            ))
            ->add('clientaddress', null, array(
                'label' => 'user.form.clientaddress',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniControlPanelBundle',
            ))
            ->add('maintitle', null, array(
                'label' => 'user.form.maintitle',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniControlPanelBundle',
                'required' => true,
            ))
            ->add('mainsubtitle', null, array(
                'label' => 'user.form.mainsubtitle',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniControlPanelBundle',
                'required' => true,
            ))
            ->add('maincalltoaction', null, array(
                'label' => 'user.form.maincalltoaction',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniControlPanelBundle',
                'required' => true,
            ))
            ->add('abouttitle', null, array(
                'label' => 'user.form.abouttitle',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniControlPanelBundle',
                'required' => true,
            ))
            ->add('aboutcontent', null, array(
                'label' => 'user.form.aboutcontent',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniControlPanelBundle',
                'required' => true,
            ))
            ->add('featuretitle', null, array(
                'label' => 'user.form.featuretitle',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniControlPanelBundle',
                'required' => true,
            ))
            ->add('featurecontent', null, array(
                'label' => 'user.form.featurecontent',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniControlPanelBundle',
                'required' => true,
            ))
            ->add('contacttitle', null, array(
                'label' => 'user.form.contacttitle',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniControlPanelBundle',
            ))
            ->add('contactcontent', null, array(
                'label' => 'user.form.contactcontent',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniControlPanelBundle',
            ))
            ->add('contactphone', null, array(
                'label' => 'user.form.contactphone',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniControlPanelBundle',
            ))
            ->add('contactemail', null, array(
                'label' => 'user.form.contactemail',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniControlPanelBundle',
            ))
            ->add('contactaddress', null, array(
                'label' => 'user.form.contactaddress',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniControlPanelBundle',
            ))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Uni\AdminBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'uni_controlpanelbundle_account';
    }


}
