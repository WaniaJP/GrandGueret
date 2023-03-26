<?php

namespace App\Form;

use App\Entity\Aliment;
use App\Entity\Sondage;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class SondageFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Aliment1',  EntityType::class, [
                'class' => Aliment::class,
                'choice_label' => 'nomFR',
                'label' => 'Aliment 1',
                'attr' => ['class' => "first-alim aliment-input bt quatre regular beige dark border-beige-dark solid thin"],
                'label_attr' => ['class' => "aliment-container bt quatre regular beige dark"],

            ])
            ->add('Aliment2',  EntityType::class, [
                'class' => Aliment::class,
                'choice_label' => 'nomFR',
                'label' => 'Aliment 2',
                'attr' => ['class' => "aliment-input bt quatre regular beige dark border-beige-dark solid thin"],
                'label_attr' => ['class' => "aliment-container bt quatre regular beige dark"],

            ])
            ->add('Aliment3',  EntityType::class, [
                'class' => Aliment::class,
                'choice_label' => 'nomFR',
                'label' => 'Aliment 3',
                'attr' => ['class' => "aliment-input bt quatre regular beige dark border-beige-dark solid thin"],
                'label_attr' => ['class' => "aliment-container bt quatre regular beige dark"],

            ])
            ->add('Aliment4',  EntityType::class, [
                'class' => Aliment::class,
                'choice_label' => 'nomFR',
                'label' => 'Aliment 4',
                'attr' => ['class' => " aliment-input bt quatre regular beige dark border-beige-dark solid thin"],
                'label_attr' => ['class' => "aliment-container bt quatre regular beige dark"],

            ])
            ->add('Aliment5',  EntityType::class, [
                'class' => Aliment::class,
                'choice_label' => 'nomFR',
                'label' => 'Aliment 5',
                'attr' => ['class' => "aliment-input bt quatre regular beige dark border-beige-dark solid thin"],
                'label_attr' => ['class' => "aliment-container bt quatre regular beige dark"],

            ])
            ->add('Aliment6',  EntityType::class, [
                'class' => Aliment::class,
                'choice_label' => 'nomFR',
                'label' => 'Aliment 6',
                'attr' => ['class' => " aliment-input bt quatre regular beige dark border-beige-dark solid thin"],
                'label_attr' => ['class' => "aliment-container bt quatre regular beige dark"],

            ])
            ->add('Aliment7',  EntityType::class, [
                'class' => Aliment::class,
                'choice_label' => 'nomFR',
                'label' => 'Aliment 7',
                'attr' => ['class' => "aliment-input bt quatre regular beige dark border-beige-dark solid thin"],
                'label_attr' => ['class' => "aliment-container bt quatre regular beige dark"],

            ])
            ->add('Aliment8',  EntityType::class, [
                'class' => Aliment::class,
                'choice_label' => 'nomFR',
                'label' => 'Aliment 8',
                'attr' => ['class' => "aliment-input bt quatre regular beige dark border-beige-dark solid thin"],
                'label_attr' => ['class' => "aliment-container bt quatre regular beige dark"],
            ])
            ->add('Aliment9',  EntityType::class, [
                'class' => Aliment::class,
                'choice_label' => 'nomFR',
                'label' => 'Aliment 9',
                'attr' => ['class' => "aliment-input bt quatre regular beige dark border-beige-dark solid thin"],
                'label_attr' => ['class' => "aliment-container bt quatre regular beige dark"],
            ])
            ->add('Aliment10',  EntityType::class, [
                'class' => Aliment::class,
                'choice_label' => 'nomFR',
                'label' => 'Aliment 10',
                'attr' => ['class' => "aliment-input bt quatre regular beige dark border-beige-dark solid thin"],
                'label_attr' => ['class' => "aliment-container bt quatre regular beige dark"]
                ])
            ->add('Validation', SubmitType::class, [
                'attr' => ['class' => "small-dark-button bt quatre semibold"]
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'label' => "En cochant cette case vous acceptez l'exploitation de ces informations.",
                'mapped' => false,
                'attr'  => array('class'=> 'bt trois regular beige dark border-beige-dark solid thin'),
                'label_attr' => ['class' => 'bt cinq medium beige dark'],
                'constraints' => [
                    new IsTrue([
                        'message' => 'Pour poursuivre vous devez cocher la case.',
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sondage::class,
        ]);
    }
}
