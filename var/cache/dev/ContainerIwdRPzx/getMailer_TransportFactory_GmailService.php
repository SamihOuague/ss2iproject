<?php

namespace ContainerIwdRPzx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_TransportFactory_GmailService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'mailer.transport_factory.gmail' shared service.
     *
     * @return \Symfony\Component\Mailer\Bridge\Google\Transport\GmailTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/google-mailer/Transport/GmailTransportFactory.php';

        return new \Symfony\Component\Mailer\Bridge\Google\Transport\GmailTransportFactory(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['.debug.http_client'] ?? $container->get_Debug_HttpClientService()), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
