<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => false,
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Adresse e-mail (*)',
                    'style' => 'margin: 15px 0px; border: none; border-bottom: 2px solid #343a40; background-color: rgba(12, 12, 17, 0.1); border-radius: 0px;'
                ]
            ])
            ->add('sujet', TextType::class, [
                'label' => false,
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Sujet (*)',
                    'style' => 'margin: 15px 0px; border: none; border-bottom: 2px solid #343a40; background-color: rgba(12, 12, 17, 0.1); border-radius: 0px;'
                ]
            ])
            ->add('phone', TelType::class, [
                'label' => false,
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Numero de telephone',
                    'style' => 'margin: 15px 0px; border: none; border-bottom: 2px solid #343a40; background-color: rgba(12, 12, 17, 0.1); border-radius: 0px;'
                ]
            ])
            ->add('message', TextareaType::class, [
                'label' => false,
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Message (*)',
                    'style' => 'margin: 15px 0px; border: none; border-bottom: 2px solid #343a40; background-color: rgba(12, 12, 17, 0.1); border-radius: 0px;'
                ]
            ])
            ->add('Envoyer', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-outline-dark',
                    'style' => "margin: 15px 0px; font-size: 25px; font-family: 'Montserrat'; padding: 10px 50px;"
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
