<?php

namespace Ecotronik\Bundle\EcopointBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class productosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigo')
            ->add('nombre')
            ->add('marca')
            ->add('material')
            ->add('capacidad')
            ->add('foto')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ecotronik\Bundle\EcopointBundle\Entity\productos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ecotronik_bundle_ecopointbundle_productos';
    }
}
