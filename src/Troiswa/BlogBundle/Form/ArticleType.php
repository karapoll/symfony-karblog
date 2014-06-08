<?php

namespace Troiswa\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('author','text')
            ->add('title','text')
            ->add('content','textarea')
            ->add('category','entity',array(
                'class' => 'TroiswaBlogBundle:Category',
                'expanded' => true,
                'multiple' => true,
                'property' => 'title',
            ))
            ->add('cover','choice',array(
                'choices' => array(0 => 'Simple', 1 => 'Popular' ),
                'expanded' => true,
                'multiple' => false,
                'data' => 0,
            ))
            ->add('submit','submit')
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Troiswa\BlogBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'troiswa_blogbundle_article';
    }
}
