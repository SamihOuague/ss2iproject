<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Adresse e-mail'
                ]
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ]
            ])
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Password', 'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Mot de passe'
                ]),
                'second_options' => array('label' => 'Repeat Password', 'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Confirmer le mot de passe'
                ]),
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrez un mot de passe',
                    ]),
                    new Length([
                        'min' => 8,
                        'minMessage' => 'Votre mot de passe doit avoir entre {{ limit }} et 15 characteres',
                        'maxMessage' => 'Votre mot de passe doit avoir entre 8 et 15 characteres',
                        // max length allowed by Symfony for security reasons
                        'max' => 15,
                    ]),
                    new Regex([
                        "pattern" => "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/",
                        "message" => "Le mot de passe ne respecte les regles indique."
                    ])
                ],
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
