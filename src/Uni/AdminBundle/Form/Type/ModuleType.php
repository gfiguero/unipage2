<?php

namespace Uni\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ModuleType extends AbstractType
{

    private $moduleChoices;

    public function __construct(array $moduleChoices)
    {
        $this->moduleChoices = $moduleChoices;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => $this->moduleChoices,
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}