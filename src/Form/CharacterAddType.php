<?php

namespace App\Form;

use App\Entity\Character;
use App\Entity\Equipment;
use App\Entity\Power;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class CharacterAddType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('realName', TextType::class, [
                'label'            => 'Sa véritable Identité',
            ])
            ->add('sex', ChoiceType::class, [
                'label'            => 'Genre',
                'choices'          => [
                    'Masculin'     => 'Masculin',
                    'Feminin'      => 'Feminin',
                    'Indéfini'     => 'Undefined'
                ]
            ])
            ->add('heroName', TextType::class, [
                'label'            => 'Son petit nom de scène',
            ])
            ->add('description', TextareaType::class,[
                'label'            => 'Dis nous quelques mots sur ton Super',
            ])
            ->add('story', TextareaType::class, [
                'label'            => 'Raconte nous son histoire',
            ])
            ->add('isNasty', ChoiceType::class, [
                'label'            => 'Bad or Good?',
                'choices'          => [
                    'Super Héro'   => '0',
                    'Super Vilain' => '1',
                ]
            ])
            ->add('strength', TextareaType::class, [
                'label'            => 'Quels sont ses points forts?'
            ] )
            ->add('weakness', TextareaType::class, [
                'label'            => 'Quelles sont ses faiblesses?'
            ])
            ->add('power', EntityType::class, [
                'class' => Power::class,
                'choice_label' => 'name',
                'label'            => 'Quels sont ses supers pouvoirs?',
                'multiple' => true,
                'expanded' => true,

            ])
            ->add('equipment', EntityType::class, [
                'class' => Equipment::class,
                'choice_label' => 'name',
                'label'            => 'Quels sont ses supers équipements?',
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('url', TextareaType::class, [
                'label'            => 'Mets l\'URL d\'une belle image de ton Super'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Character::class,
        ]);
    }
}
