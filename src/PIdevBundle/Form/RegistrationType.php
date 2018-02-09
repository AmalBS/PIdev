<?php
// src/AppBundle/Form/RegistrationType.php

namespace PIdevBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')->add('prenom')->add('adresse')->add('roles', ChoiceType::class, array(
                'label' => 'Type',
                'choices' => array(
                    'Utilisateur' => 'ROLE_USER',
                    'Veterinaire' => 'ROLE_VETERINAIRE',
                    'Association' => 'ROLE_ASSOCIATION'
                ),
                'required' => true,
                'multiple' => true,)
        );




    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

}