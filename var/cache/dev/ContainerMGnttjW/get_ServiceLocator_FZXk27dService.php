<?php

namespace ContainerMGnttjW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FZXk27dService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fZXk27d' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fZXk27d'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'slugger' => '?',
        ]);
    }
}
