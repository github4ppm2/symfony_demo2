<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace AppBundle\Form;

use AppBundle\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'label'  => 'Name',
                'attr'   =>  array(
                'class'   => 'form-control')
            ))
            ->add('email', EmailType::class, array(
                'label'  => 'Email',
                'attr'   =>  array(
                'class'   => 'form-control')
            ))
            ->add('username', TextType::class, array(
                'label'  => 'Username',
                'attr'   =>  array(
                'class'   => 'form-control')
            ))
            ->add('password', PasswordType::class, array(
                'label'  => 'Password',
                'attr'   =>  array(
                'class'   => 'form-control')
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Users::class,
        ));
    }
}
