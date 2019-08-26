<?php

namespace App\Form;

use App\Entity\MarqueRecherche;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class MarqueRechercheType extends AbstractType
{
    /*public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('marqueRechercher', TextType::class, [
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'marque choisit'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MarqueRecherche::class,
            'method' => 'get' ,
            'csrf_protection' => false
        ]);
    }*/
}
