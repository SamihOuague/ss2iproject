<?php

namespace ContainerOb14xVx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClientControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\ClientController' shared autowired service.
     *
     * @return \App\Controller\ClientController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ClientController'] = $instance = new \App\Controller\ClientController(($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')));

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\ClientController', $container));

        return $instance;
    }
}
