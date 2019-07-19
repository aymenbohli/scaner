<?php

namespace App\Form;

use App\Entity\Classes;
use App\Entity\Etudiant;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EtudiantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('age')
            ->add('sex')
            ->add('email')
            ->add('classes', EntityType::class, [
                'label' => 'category: ',
                'class' => Classes::class,
                'choice_label' => function (Classes $customer) {
                    return $customer->getTitre();
                },
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Etudiant::class,
        ]);
    }
}
