<?php

namespace PIdevBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ReclamationType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder ->add('user',EntityType::class
            ,array(
                'class'=>'PIdevBundle\Entity\User',
                'choice_label'=>'email',
                'multiple'=> false ,
            ))
            ->add('objet')
            ->add('description')
            ->add('statut', HiddenType::class, array(
                'data' => 'non traitée'))

            ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PIdevBundle\Entity\Reclamation'
        ));
    }


    public function getBlockPrefix()
    {
        return 'pidevbundle_reclamation';
    }


}
