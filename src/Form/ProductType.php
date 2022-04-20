<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name_product', TextType::class, [
                'label' => 'Nom du produit',
            ])
            ->add('price_product')
            ->add('desc_product', TextareaType::class, [
                'label' => 'Description du produit',
            ])
            ->add('category', EntityType::class, [
                  'class'=>Category::class,
                  'label'=>'Categorie',
                  'choice_label'=>'name_category',
              ])
            ->add('imgFile', VichImageType::class, [
                'label' => 'Image',
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
