<?php

namespace App\Form;

use App\Entity\CategoryCours;
use App\Entity\Cours;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('descreption')
            ->add('file')
            ->add('category', EntityType::class, [
                'label' => 'category: ',
                'class' => CategoryCours::class,
                'choice_label' => function (CategoryCours $customer) {
                    return $customer->getName();
                },
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cours::class,
        ]);
    }
}
