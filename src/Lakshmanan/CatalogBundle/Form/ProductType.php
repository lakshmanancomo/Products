<?php

namespace Lakshmanan\CatalogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('summary')
            ->add('isactive')
            ->add('slug')
            ->add('brand','entity',array('label'=> 'Brand',
                'class'=>'LakshmananCatalogBundle:Brand',
                'property'=>'name',
                'multiple'=>false,'expanded'=> true))
            ->add('category','entity',array('label'=> 'Category',
                 'class'=>'LakshmananCatalogBundle:Category',
                 'property'=>'name',
                 'multiple'=>true,'expanded'=> false          
                ))    
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lakshmanan\CatalogBundle\Entity\Product'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lakshmanan_catalogbundle_product';
    }
}
