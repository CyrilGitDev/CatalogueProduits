<?php

namespace App\Form;

use App\Entity\ProduitRecherche;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ProduitRechercheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('nomProduit', TextType::class,[
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'rechercher un produit'
                ]
            ])
            ->add('maxPrix', TextType::class,[
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'prix maximum'
                ]
            ])
            ->add('marqueRechercher', MarqueType::class,[
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'Marque Souhaitée'
                ]
            ])
            //->add('marqueRechercher')
            ->add('dateChercher', DateTimeType::class,[
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'Date'
                ]
            ]) 
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ProduitRecherche::class,
            'method' => 'get' ,
            'csrf_protection' => false
        ]);
    }

    public function getBlockPrefix(){
        return '';
    }
}
