<?php

namespace ContainerOb14xVx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMissionRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\MissionRepository' shared autowired service.
     *
     * @return \App\Repository\MissionRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\MissionRepository'] = new \App\Repository\MissionRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}