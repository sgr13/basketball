<?php
namespace BasketballBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class BasketballType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('label' => 'Imię:'))
            ->add('nickname', 'text', array('label' => 'Nick:'))
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => 'Hasło jest niezgodne!',
                'options' => array('attr' => array('class' => 'password-field')),
                'required' => true,
                'first_options' => array('label' => 'Hasło'),
                'second_options' => array('label' => 'Powtórz haslo:')))
            ->add('height', 'text', array('label' => 'Wzrost:'))
            ->add('position', 'text', array('label' => 'Pozycja:'))
            ->add('position', EntityType::class, array(
                'class' => 'BasketballBundle:Position',
                'choice_label' => 'name', 'label' => 'Pozycja:'))
            ->add('mainPhoto', 'text', array('label' => 'Zdjecie1:'))
            ->add('secondPhoto', 'text', array('label' => 'Zdjecie2:'))
            ->add('specialisation', EntityType::class, array(
                'class' => 'BasketballBundle:Specialisation',
                'choice_label' => 'name', 'label' => 'Mocna strona:'))
            ->add('save', 'submit', array('label' => 'Dodaj'));

        if ($options['noPhoto']) {
            $builder->remove('mainPhoto')
                    ->remove(('secondPhoto'));
        }

        if ($options['admin']) {
            $builder->remove('password')
                    ->remove('confirm');
        }
    }

    public function getName()
    {
        return '';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BasketballBundle\Entity\Player',
            'noPhoto' => false,
            'admin' => false
        ));
    }
}