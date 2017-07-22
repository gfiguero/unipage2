<?php

namespace Uni\AgentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BudgetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder 
            ->add('client', null, array(
                'label' => 'budget.form.client',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniAgentBundle',
            )) 
            ->add('seller', null, array(
                'label' => 'budget.form.seller',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'UniAgentBundle',
            ))
            ->add('items', 'bootstrap_collection', array(
                'label' => false,
                'attr'  => array( 'label_col' => 0, 'widget_col' => 12 ),
                'translation_domain' => 'UniAgentBundle',
                'entry_type' => 'Uni\AgentBundle\Form\ItemType',
                'allow_add' => true,
                'allow_delete' => true,
                'add_button_text'    => 'budget.form.additem',
                'delete_button_text' => 'budget.form.deleteitem',
                'delete_empty' => true,
                'by_reference' => false,
            ))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Uni\AdminBundle\Entity\Budget'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'kore_agentbundle_budget';
    }


}
