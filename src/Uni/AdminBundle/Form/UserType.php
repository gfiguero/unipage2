<?php

namespace Uni\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
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
                'translation_domain' => 'UniAdminBundle',
            )) 
            ->add('contactname', null, array(
                'label' => 'user.form.contactname',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniAdminBundle',
            )) 
            ->add('contactemail', null, array(
                'label' => 'user.form.contactemail',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniAdminBundle',
            )) 
            ->add('contactphone', null, array(
                'label' => 'user.form.contactphone',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniAdminBundle',
            )) 
            ->add('contactaddress', null, array(
                'label' => 'user.form.contactaddress',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniAdminBundle',
            )) 
            ->add('absoluteurl', null, array(
                'label' => 'user.form.absoluteurl',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniAdminBundle',
            )) 
            ->add('pagetitle', null, array(
                'label' => 'user.form.pagetitle',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniAdminBundle',
            )) 
            ->add('pagesubtitle', null, array(
                'label' => 'user.form.pagesubtitle',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniAdminBundle',
            )) 
            ->add('pagecalltoaction', null, array(
                'label' => 'user.form.pagecalltoaction',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniAdminBundle',
            )) 
            ->add('abouttitle', null, array(
                'label' => 'user.form.abouttitle',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniAdminBundle',
            )) 
            ->add('aboutcontent', null, array(
                'label' => 'user.form.aboutcontent',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniAdminBundle',
            )) 
            ->add('featuretitle', null, array(
                'label' => 'user.form.featuretitle',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniAdminBundle',
            )) 
            ->add('featurecontent', null, array(
                'label' => 'user.form.featurecontent',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniAdminBundle',
            )) 
            ->add('contacttitle', null, array(
                'label' => 'user.form.contacttitle',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniAdminBundle',
            )) 
            ->add('contactcontent', null, array(
                'label' => 'user.form.contactcontent',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniAdminBundle',
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
        return 'uni_adminbundle_user';
    }


}
