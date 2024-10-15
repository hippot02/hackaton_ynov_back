<?php

namespace App\Form;

use App\Entity\Rendu;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RenduType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('dateDepot', null, [
                'widget' => 'single_text',
            ])
            ->add('lienDepot')
            ->add('groupe', ChoiceType::class, [
                'choices' => [
                    'M1Web' => 'M1Web',
                    'M1Data' => 'M1Data',
                    'M1Log' => 'M1Log',
                ],
                'expanded' => false,
                'multiple' => false,
                'placeholder' => 'Choisir un groupe',
            ])
            ->add('actif')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Rendu::class,
        ]);
    }
}
