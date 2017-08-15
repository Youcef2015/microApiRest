<?php
/**
 * Created by PhpStorm.
 * User: ylezghed
 * Date: 15/08/17
 * Time: 19:58
 */

namespace DemoApiBundle\Form;


use DemoApiBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username')
            ->add('firstname')
            ->add('lastname')
            ->add('password')
            ->add('save', SubmitType::class, array('label' => 'Create User'));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class
        ));
    }
}
