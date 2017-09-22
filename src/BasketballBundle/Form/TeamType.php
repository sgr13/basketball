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
            ->add('p1t1', EntityType::class, array(
                'class' => 'BasketballBundle:Player',
                'choice_label' => 'name', 'label' => 'Zawodnik nr 1:'))
            ->add('p2t1', EntityType::class, array(
                'class' => 'BasketballBundle:Player',
                'choice_label' => 'name', 'label' => 'Zawodnik nr 2:'))
            ->add('p3t1', EntityType::class, array(
                'class' => 'BasketballBundle:Player',
                'choice_label' => 'name', 'label' => 'Zawodnik nr 3:'))
            ->add('p4t1', EntityType::class, array(
                'class' => 'BasketballBundle:Player',
                'choice_label' => 'name', 'label' => 'Zawodnik nr 4:'))
            ->add('p5t1', EntityType::class, array(
                'class' => 'BasketballBundle:Player',
                'choice_label' => 'name', 'label' => 'Zawodnik nr 5:'))
            ->add('p1t2', EntityType::class, array(
                'class' => 'BasketballBundle:Player',
                'choice_label' => 'name', 'label' => 'Zawodnik nr 1:'))
            ->add('p2t2', EntityType::class, array(
                'class' => 'BasketballBundle:Player',
                'choice_label' => 'name', 'label' => 'Zawodnik nr 2:'))
            ->add('p3t2', EntityType::class, array(
                'class' => 'BasketballBundle:Player',
                'choice_label' => 'name', 'label' => 'Zawodnik nr 3:'))
            ->add('p4t2', EntityType::class, array(
                'class' => 'BasketballBundle:Player',
                'choice_label' => 'name', 'label' => 'Zawodnik nr 4:'))
            ->add('p5t2', EntityType::class, array(
                'class' => 'BasketballBundle:Player',
                'choice_label' => 'name', 'label' => 'Zawodnik nr 5:'))
            ->add('t1score', 'integer', array('label' => 'Wynik drużyny 1:'))
            ->add('t2score', 'integer', array('label' => 'Wynik drużyny 2:'))
            ->add('save', 'submit', array('label' => 'Zapisz'));

        if ($options['2']) {
            $builder->remove('p3t1')
                    ->remove('p4t1')
                    ->remove('p5t1')
                    ->remove('p3t2')
                    ->remove('p4t2')
                    ->remove('p5t2');
        }
      if ($options['3']) {
            $builder->remove('p4t1')
                    ->remove('p5t1')
                    ->remove('p4t2')
                    ->remove('p5t2');
        }
      if ($options['4']) {
            $builder->remove('p5t1')
                    ->remove('p5t2');
        }
    }

    public function getName()
    {
        return '';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BasketballBundle\Entity\Game',
            '2' => false,
            '3' => false,
            '4' => false,
            '5' => false
        ));
    }
}