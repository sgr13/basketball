<?php
namespace BasketballBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BasketballType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('label' => 'Imię:'))
            ->add('nickname', 'text', array('label' => 'Nick:'))
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
    }

    public function getName()
    {
        return '';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BasketballBundle\Entity\Player'
        ));
    }
}