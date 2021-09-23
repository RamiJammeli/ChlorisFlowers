<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prodcutName',null)
            ->add('boxSize',ChoiceType::class, [
                'choices'  => [
                    'S' => 'S',
                    'M' => 'M',
                    'L' => 'L',
                    'XL' => 'XL'
                ]  , 'placeholder' => false,])
            ->add('boxColor',ChoiceType::class, [
                'choices'  => [
                    'Blanc' => 'Blanc',
                    'Noir' => 'Noir',
                    'Rose' => 'Rose',
                    'Jaune' => 'Jaune'
                ]  , 'placeholder' => false,])
            ->add('descriptionBox',TextareaType::class)
            ->add('roseNumber',ChoiceType::class, [
                'choices'  => [
                    '8-10' =>  '8-10',
                    '18-20' =>  '18-20',
                    '25-30' => '25-30',
                    '4' =>  '4',
                    '30' => '30',
                    '10' => '10'
                ]  , 'placeholder' => false,])
            ->add('roseColor',ChoiceType::class, [
                'choices'  => [
                    'Blanche' =>  'Blanche',
                    'Champagne' =>  'Champagne',
                    'Gypsophile' => 'Gypsophile',
                    'Rose' =>  'Rose',
                    'Rouge' => 'Rouge',
                    'Rose Bicolore' => 'Rose Bicolore'
                ]  , 'placeholder' => false,])



            ->add('categorie',ChoiceType::class, [
                'choices'  => [
                    'The Classic Collection' =>  'the classic collection',
                    'The marble Collection' =>  'the marble collection',
                    'The Bird Collection' => 'the bird collection',
                    'The Blooming Bride' =>  'The Blooming Bride',

                ]  , 'placeholder' => false,])

            ->add('prix',IntegerType::class)
            ->add('stock',IntegerType::class,['required' => false])
            ->add('imageFile', FileType::class, [
                'mapped' => false,
                'required' => false
            ])
            ->add('imageFileHaut', FileType::class, [
                'mapped' => false,'required' => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
