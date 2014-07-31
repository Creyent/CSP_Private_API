<?php

namespace CSP\GenericoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * ProductosType form.
 * @author Nombre Apellido <name@gmail.com>
 */
class ProductosType extends AbstractType
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
            ->add('costo')
            ->add('precio')
            ->add('existencias')
            ->add(
                'idcategoria', 'voryx_entity', array(
                'class' => 'CSP\GenericoBundle\Entity\Categorias'
                )
            )
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CSP\GenericoBundle\Entity\Productos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'csp_genericobundle_productos';
    }
}
