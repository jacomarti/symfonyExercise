<?php

namespace ContainerB19rvbm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServicesResetterService extends App_KernelProdContainer
{
    /*
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () use ($container) {
            if (isset($container->services['cache.app'])) {
                yield 'cache.app' => ($container->services['cache.app'] ?? null);
            }
            if (isset($container->services['cache.system'])) {
                yield 'cache.system' => ($container->services['cache.system'] ?? null);
            }
            if (false) {
                yield 'cache.validator' => null;
            }
            if (false) {
                yield 'cache.serializer' => null;
            }
            if (isset($container->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($container->privates['cache.annotations'] ?? null);
            }
            if (false) {
                yield 'cache.property_info' => null;
            }
            if (isset($container->privates['doctrine.result_cache_pool'])) {
                yield 'doctrine.result_cache_pool' => ($container->privates['doctrine.result_cache_pool'] ?? null);
            }
            if (isset($container->privates['doctrine.system_cache_pool'])) {
                yield 'doctrine.system_cache_pool' => ($container->privates['doctrine.system_cache_pool'] ?? null);
            }
            if (isset($container->privates['session_listener'])) {
                yield 'session_listener' => ($container->privates['session_listener'] ?? null);
            }
            if (isset($container->privates['mailer.message_logger_listener'])) {
                yield 'mailer.message_logger_listener' => ($container->privates['mailer.message_logger_listener'] ?? null);
            }
            if (isset($container->privates['debug.stopwatch'])) {
                yield 'debug.stopwatch' => ($container->privates['debug.stopwatch'] ?? null);
            }
            if (isset($container->services['doctrine'])) {
                yield 'doctrine' => ($container->services['doctrine'] ?? null);
            }
        }, function () use ($container) {
            return 0 + (int) (isset($container->services['cache.app'])) + (int) (isset($container->services['cache.system'])) + (int) (false) + (int) (false) + (int) (isset($container->privates['cache.annotations'])) + (int) (false) + (int) (isset($container->privates['doctrine.result_cache_pool'])) + (int) (isset($container->privates['doctrine.system_cache_pool'])) + (int) (isset($container->privates['session_listener'])) + (int) (isset($container->privates['mailer.message_logger_listener'])) + (int) (isset($container->privates['debug.stopwatch'])) + (int) (isset($container->services['doctrine']));
        }), ['cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset'], 'cache.property_info' => [0 => 'reset'], 'doctrine.result_cache_pool' => [0 => 'reset'], 'doctrine.system_cache_pool' => [0 => 'reset'], 'session_listener' => [0 => 'reset'], 'mailer.message_logger_listener' => [0 => 'reset'], 'debug.stopwatch' => [0 => 'reset'], 'doctrine' => [0 => 'reset']]);
    }
}
