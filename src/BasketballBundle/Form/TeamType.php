<?php
namespace BasketballBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TeamType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('player1', 'text', array('label' => 'Zawodnik 1'))
            ->add('player1', EntityType::class, array(
                'class' => 'BasketballBundle:Player',
                'choice_label' => 'name', 'label' => 'Zawodnik nr 1:'))
            ->add('player2', EntityType::class, array(
                'class' => 'BasketballBundle:Player',
                'choice_label' => 'name', 'label' => 'Zawodnik nr 2:'))
            ->add('player3', EntityType::class, array(
                'class' => 'BasketballBundle:Player',
                'choice_label' => 'name', 'label' => 'Zawodnik nr 3:'))
            ->add('player4', EntityType::class, array(
                'class' => 'BasketballBundle:Player',
                'choice_label' => 'name', 'label' => 'Zawodnik nr 4:'))
            ->add('player5', EntityType::class, array(
                'class' => 'BasketballBundle:Player',
                'choice_label' => 'name', 'label' => 'Zawodnik nr 5:'))
            ->add('save', 'submit', array('label' => 'Dodaj'));
    }

    public function getName()
    {
        return '';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BasketballBundle\Entity\Team'
        ));
    }
}