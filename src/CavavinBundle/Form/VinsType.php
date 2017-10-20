<?php

namespace CavavinBundle\Form;

use CavavinBundle\Entity\Vins;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VinsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('region', 'choice', array(
                'choices' => array(
                    'Alsace' => "Alsace",
                    'Bordeaux' => "Bordeaux",
                    'Beaujolais' => "Beaujolais",
                    'Bourgogne' => "Bourgogne",
                    'Champagne' => "Champagne",
                    'Cognac' => "Cognac",
                    'Corse' => "Corse",
                    'Jura' => "Jura",
                    'Languedoc-Roussillon' => "Languedoc-Roussillon",
                    'Loire' => "Loire",
                    'Provence' => "Provence",
                    'Savoie' => "Savoie",
                    'Sud-Ouest' => "Sud-Ouest"
                    ),
                'multiple' => false,
                'empty_value' => '- Choisissez une région -'
            ))
            ->add('type', 'choice', array(
                'choices' => array(
                    'Brut' => "Brut",
                    'Doux' => "Doux",
                    'Demi-sec' => "Demi-sec",
                    'Moelleux' => "Moelleux",
                    'Sec' => "Sec"),
                'multiple' => false,
                'empty_value' => '- Choisissez un type -'
            ))
            ->add('color', 'choice', array(
                'choices' => array(
                    Vins::COLOR_WHITE => "Blanc",
                    Vins::COLOR_RED => "Rouge",
                    Vins::COLOR_ROSE => "Rosé"),
                'multiple' => false,
                'empty_value' => '- Choisissez une couleur -'
            ))
            ->add('quantite')
            ->add('year')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CavavinBundle\Entity\Vins'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cavavinbundle_vins';
    }
}
