<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class CurrencyAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('id')
            ->add('name')
            ->add('imagen')
            ->add('isoCode')
            ->add('isoCodeNum')
            ->add('sign')
            ->add('blank')
            ->add('format')
            ->add('decimals')
            ->add('conversionRate')
            ->add('deleted')
            ->add('active')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('name')
            ->add('imagen')
            ->add('isoCode')
            ->add('isoCodeNum')
            ->add('sign')
            ->add('blank')
            ->add('format')
            ->add('decimals')
            ->add('conversionRate')
            ->add('deleted')
            ->add('active')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('name')
            ->add('imagen')
            ->add('isoCode')
            ->add('isoCodeNum')
            ->add('sign')
            ->add('blank')
            ->add('format')
            ->add('decimals')
            ->add('conversionRate')
            ->add('deleted')
            ->add('active')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'edit' => array()
                )))
        ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('name')
            ->add('imagen')
            ->add('isoCode')
            ->add('isoCodeNum')
            ->add('sign')
            ->add('blank')
            ->add('format')
            ->add('decimals')
            ->add('conversionRate')
            ->add('deleted')
            ->add('active')
        ;
    }

}