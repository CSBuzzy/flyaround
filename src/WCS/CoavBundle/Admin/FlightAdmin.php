<?php
namespace WCS\CoavBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class FlightAdmin extends Admin {

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('departure')
            ->add('arrival')
            ->add('pilot')
            ->add('freeSeats')
            ->add('takeofTime')
            ->add('planemodel');
           // ->add('reservation')
          //  ->add('arrivals');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('departure')
            ->add('arrival')
            ->add('pilot')
            ->add('freeSeats')
            ->add('takeofTime')
            ->add('planemodel');
          //  ->add('reservation')
           // ->add('arrivals');

    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('planemodel')
           // ->add('reservation')
            ->add('freeSeats')
            ->add('pilot')
           // ->add('arrivals')
            ->add('departure')
            ->add('takeofTime')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'view' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ));
    }

        protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('departure')
            ->add('arrival')
            ->add('pilot')
            ->add('freeSeats')
            ->add('takeofTime')
            ->add('planemodel');
          //  ->add('reservation')
          //  ->add('arrivals');
    }
}