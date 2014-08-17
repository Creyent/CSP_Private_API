<?php
namespace CSP\BaseBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav pull');
        $menu->addChild('Acerca de', array('route' => 'about'));
        $menu->addChild('P. Base', array('route' => 'generico'));
        $menu->addChild('API Client', array('route' => 'apiclient'));
        return $menu;
    }
    
    public function userMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav pull');
        $menu->addChild('Productos', array('route' => 'productos'));
        $menu->addChild('Proveedores', array('route' => 'proveedores'));
        $menu->addChild('Clientes', array('route' => 'clientes'));
        return $menu;
    }
    
    public function adminMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav pull');
        $menu->addChild('Categorias', array('route' => 'categorias'));
        $menu->addChild('Empleados', array('route' => 'empleados'));
        return $menu;
    }
    
    public function sideMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav pull');
        $menu->addChild('Usuarios')->setAttribute('dropdown', true);
        $menu['Usuarios']->addChild('Ver Perfil', array('route' => 'fos_user_profile_show'))
                         ->setAttribute('divider_append', true);
        $menu['Usuarios']->addChild('Editar Perfil', array('route' => 'fos_user_profile_edit'));
        $menu['Usuarios']->addChild('Cambiar contraseña', array('route' => 'fos_user_change_password'));
        $menu['Usuarios']->addChild('Cerrar sesión', array('route' => 'fos_user_security_logout'));
        return $menu;
    }
}