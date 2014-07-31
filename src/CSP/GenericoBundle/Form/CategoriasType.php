<?php

namespace CSP\GenericoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * CategoriasType form.
 * @author Nombre Apellido <name@gmail.com>
 */
class CategoriasType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('descripcion')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CSP\GenericoBundle\Entity\Categorias'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'csp_genericobundle_categorias';
    }
}
