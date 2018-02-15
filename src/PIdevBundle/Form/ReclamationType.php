<?php

namespace PIdevBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ReclamationType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user')
            ->add('objet', ChoiceType::class , array(
                'choices'  => array(
                    'Animaux Perdus' => 'Animaux Perdus',
                    'Service' => 'Service',
                    'Autres' =>'Autres'),
            ))
            ->add('description' , TextareaType::class)
            ->add('statut', HiddenType::class, array(
                'data' => 'non traitée'))
            ->add('dateReclamation',HiddenType::class )
            ->add('lieu')
            ->add('imageAnimaux')
            ->add('ajouter',SubmitType::class)
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
