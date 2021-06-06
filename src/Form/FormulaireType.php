<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\SubCategory;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormulaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('content')
            ->add('date')
            ->add('image')
            ->add('Content2')
            ->add('Content3')
            ->add('Content4')
            ->add('Content5')
            ->add('image2')
            ->add('image3')
            ->add('image4')
            ->add('title2')
            ->add('title3')
            ->add('title4')
            ->add('title5')
            ->add('subCategories',EntityType::class,[
                'class' => SubCategory::class,
                'choice_label' => 'name'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
