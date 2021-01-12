<?php

namespace ContainerOb14xVx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_XliffLintService extends App_KernelProdContainer
{
    /*
     * Gets the private 'console.command.xliff_lint' shared service.
     *
     * @return \Symfony\Component\Translation\Command\XliffLintCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.xliff_lint'] = $instance = new \Symfony\Component\Translation\Command\XliffLintCommand();

        $instance->setName('lint:xliff');

        return $instance;
    }
}
