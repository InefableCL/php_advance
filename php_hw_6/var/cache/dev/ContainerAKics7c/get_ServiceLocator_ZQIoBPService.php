<?php

namespace ContainerAKics7c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZQIoBPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZQIo_BP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZQIo_BP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'shopItems' => ['privates', '.errored..service_locator.ZQIo_BP.App\\Entity\\ShopItems', NULL, 'Cannot autowire service ".service_locator.ZQIo_BP": it references class "App\\Entity\\ShopItems" but no such service exists.'],
        ], [
            'em' => '?',
            'shopItems' => 'App\\Entity\\ShopItems',
        ]);
    }
}
