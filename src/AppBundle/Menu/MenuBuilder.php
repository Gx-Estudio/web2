<?php

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
class MenuBuilder
{
    private $factory;

    /**
     * @param FactoryInterface $factory
     *
     * Add any other dependency you need
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(array $options)
    {
        $menu = $this->factory->createItem('root');

        $menu->addChild('dw', array('uri' => 'javascript:void(0)', 'label' => 'Diseño web'))
            ->setAttribute('class', 'dropdown')
            ->setLinkAttribute('class', 'dropdown-toggle')
            ->setLinkAttribute('data-toggle', 'dropdown')
            ->setChildrenAttribute('class', 'dropdown-menu')
            ->setExtra('translation_domain', false);

        $menu['dw']->addChild('Web Económica', array('route' => 'website_show', 'routeParameters' => array('slug' => 'economica')))
            ->setExtra('translation_domain', false);
        $menu['dw']->addChild('Web E-commerce', array('route' => 'website_show', 'routeParameters' => array('slug' => 'e-commerce')))
            ->setExtra('translation_domain', false);
        $menu['dw']->addChild('Web Gestionable', array('route' => 'website_show', 'routeParameters' => array('slug' => 'gestionable')))
            ->setExtra('translation_domain', false);
        $menu['dw']->addChild('Web Personalizada', array('route' => 'website_show', 'routeParameters' => array('slug' => 'personalizada')))
            ->setExtra('translation_domain', false);

        $menu->addChild('servers', array('uri' => 'javascript:void(0)', 'label' => 'Servidores'))
            ->setAttribute('class', 'dropdown')
            ->setLinkAttribute('class', 'dropdown-toggle')
            ->setLinkAttribute('data-toggle', 'dropdown')
            ->setChildrenAttribute('class', 'dropdown-menu')
            ->setExtra('translation_domain', false);
        $menu['servers']->addChild('Dominios Web', array('route' => 'dominios'))
            ->setExtra('translation_domain', false);
        $menu['servers']->addChild('Web Hosting', array('route' => 'hosting'))
            ->setExtra('translation_domain', false);
        $menu['servers']->addChild('Servidor Privado Virtual', array('route' => 'vps'))
            ->setExtra('translation_domain', false);
        //$menu['servers']->addChild('Certificados SSL', array('route' => 'ssl'))
        //   ->setExtra('translation_domain', false);

        $menu->addChild('Live Chat', array('route' => 'chat'))
            ->setExtra('translation_domain', false);

        $menu->addChild('publicidad', array('uri' => 'javascript:void(0)', 'label' => 'Marketing'))
            ->setAttribute('class', 'dropdown')
            ->setLinkAttribute('class', 'dropdown-toggle')
            ->setLinkAttribute('data-toggle', 'dropdown')
            ->setChildrenAttribute('class', 'dropdown-menu')
            ->setExtra('translation_domain', false);
        $menu['publicidad']->addChild('Anuncios Google', array('route' => 'google'))
            ->setExtra('translation_domain', false);
        $menu['publicidad']->addChild('Anuncios Facebook', array('route' => 'facebook'))
            ->setExtra('translation_domain', false);
        $menu['publicidad']->addChild('Email Marketing', array('route' => 'newsletter'))
            ->setExtra('translation_domain', false);


        $menu->addChild('Contáctenos', array('route' => 'contacto'))
            ->setExtra('translation_domain', false);

        $menu->setChildrenAttribute('class', 'nav navbar-nav');

        return $menu;
    }

    public function createProfileMenu(array $options)
    {
        $menu = $this->factory->createItem('root');

        $menu->addChild('dashboard', array('route' => 'fos_user_profile_show', 'label' => '<i class="fa fa-cubes"></i> Mis Productos</a>', 'extras' => array('safe_label' => true)))
            ->setAttribute('class', 'list-group-item');

        $menu->addChild('comprobantes', array('uri' => '#', 'label' => '<i class="fa fa-credit-card"></i> Pagos y Facturación</a>', 'extras' => array('safe_label' => true)))
            ->setAttribute('class', 'list-group-item');

        $menu->addChild('informes', array('uri' => '#', 'label' => '<i class="fa fa-comments"></i> Soporte Técnico</a>', 'extras' => array('safe_label' => true)))
            ->setAttribute('class', 'list-group-item');

        $menu->addChild('cuenta', array('uri' => '#', 'label' => '<i class="fa fa-cogs"></i> Mi Cuenta</a>', 'extras' => array('safe_label' => true)))
            ->setAttribute('class', 'list-group-item');

        $menu->setChildrenAttribute('class', 'list-group sidebar-nav-v1 margin-bottom-40');
        return $menu;
    }
}

