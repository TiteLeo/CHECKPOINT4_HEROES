<?php

namespace App\Form;

use App\Entity\Message;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name',TextType::class, [
                'label'   => 'Tes petits noms et prénoms',
            ])
            ->add('mail', TextType::class, [
                'label'   => 'Email',
            ])
            ->add('choice', ChoiceType::class, [
                'label'   => 'Dis-moi tout!',
                'choices' => [
                    'Ce site est Super Top'       => 'Ce site est Super',
                    'Ce site est Super Vilain'    => 'Ce site est Super Vilain',
                    'Juste pour dire un mot doux' => 'Juste pour dire un mot doux',
                ]
            ])
            ->add('text', TextareaType::class, [
                'label'   => 'Ton mot doux',
                'attr'    => [ 'rows' => "8",
                    ]
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Message::class,
        ]);
    }
}
