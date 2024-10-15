<?php

namespace App\Form;

use App\Entity\Rendu;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
            ->add('groupe')
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
