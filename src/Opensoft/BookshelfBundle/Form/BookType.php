<?php

namespace Opensoft\BookshelfBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BookType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', [
                'label' => 'Название',
                'required' => true
            ])
            ->add('author', 'text', ['label' => 'Автор'])
            ->add('category', 'entity', [
                'class' => 'OpensoftBookshelfBundle:Category',
                'label' => 'Категория'
            ])
            ->add('description', 'textarea', [
                'label' => 'Описание'
            ])
            ->add('public', 'checkbox', [
                'label' => 'В общем доступе',
                'required' => false
            ])

            //additional info
            ->add('pages', 'integer', [
                'label' => 'Количество страниц',
                'required' => false
            ])
            ->add('link', 'url', [
                'label' => 'Ссылка',
                'required' => false
            ])
            ->add('edition', 'text', [
                'label' => 'Издание',
                'required' => false
            ])
            ->add('published', 'date', [
                'label' => 'Год издания',
                'required' => false
            ])
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Opensoft\BookshelfBundle\Entity\Book'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'opensoft_bookshelfbundle_book';
    }
}
