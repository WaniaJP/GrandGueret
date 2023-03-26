<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;


class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => "Email",
                'attr'  => array('class' => 'bt trois regular beige dark border-beige-dark solid thin'),
                'label_attr' => ['class' => 'bt trois medium beige dark'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrez votre email.',
                    ]),
                ],
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'attr'  => array('class' => 'bt trois regular beige dark border-beige-dark solid thin'),
                'label_attr' => ['class' => 'bt trois medium beige dark'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrez votre prénom.',
                    ]),
                ],
            ])
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'attr'  => array('class' => 'bt trois regular beige dark border-beige-dark solid thin'),
                'label_attr' => ['class' => 'bt trois medium beige dark'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrez votre nom.',
                    ]),
                ],
            ])
            ->add('dateNaissance', DateType::class, [
                'label' => 'Date de Naissance',
                'label_attr' => ['class' => 'bt trois medium beige dark'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Indiquez une date de naissance.',
                    ]),
                ],
            ])
            ->add('adresse', TextType::class, [
                'label' => 'Adresse',
                'attr'  => array('class' => 'bt trois regular beige dark border-beige-dark solid thin'),
                'label_attr' => ['class' => 'bt trois medium beige dark'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Indiquez votre adresse',
                    ]),
                ],
            ])
            ->add('codePostal', TextType::class, [
                'label' => 'Code Postal',
                'attr'  => array('class' => 'bt trois regular beige dark border-beige-dark solid thin'),
                'label_attr' => ['class' => 'bt trois medium beige dark'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Indiquez votre Code Postal.',
                    ]),
                ],
            ])
            ->add('ville',  TextType::class, [
                'label' => 'Ville',
                'attr'  => array('class' => 'bt trois regular beige dark border-beige-dark solid thin'),
                'label_attr' => ['class' => 'bt trois medium beige dark'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Choisissez une ville.',
                    ]),
                ],
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'label' => "En cochant cette case vous acceptez les Termes et Conditions d'utilisation.",
                'mapped' => false,
                'attr'  => array('class' => 'bt trois regular beige dark border-beige-dark solid thin'),
                'label_attr' => ['class' => 'bt quatre medium beige dark'],
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'label' => 'Mot de passe',
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password', 'class' => 'bt trois regular beige dark border-beige-dark solid thin'],
                'label_attr' => ['class' => 'bt trois medium beige dark'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
