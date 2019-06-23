<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Question;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class QuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
          ->add('category', EntityType::class, [
                'label' => 'category: ',
                'class' => Category::class,
                'choice_label' => function (Category $customer) {
                    return $customer->getName();
                },
            ])
          /*  ->add('category', CollectionType::class, array(
                'entry_type' => Category::class,
                'by_reference' => true
            ))*/
            ->add('save', SubmitType::class, array(
                'attr' => array(
                    'class' => 'btn btn-primary',
                ),
                'label' => 'save'
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Question::class,
        ]);
    }
}
