<?php

namespace App\Form;

use App\Entity\Menu;
use App\Entity\Page;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('metadata', CollectionType::class, [
                'allow_add' => true,
                'allow_delete' => true,
                'required' => false
            ])
            ->add('body', TextareaType::class, ['attr' => ['class' => 'richtexteditor', 'id' => 'richtexteditor']])
            ->add('menu', EntityType::class, [
                'class' => Menu::class,
                'choice_label' => 'title',
                'placeholder' => 'Choose an option',
                'required' => false
            ])
            ->add('menuOrder')
            ->add('isHomePage')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Page::class,
        ]);
    }
}
