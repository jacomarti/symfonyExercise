<?php

namespace ContainerB19rvbm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouting_LoaderService extends App_KernelProdContainer
{
    /*
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = new \Symfony\Component\Config\Loader\LoaderResolver();

        $b = new \Symfony\Component\HttpKernel\Config\FileLocator(($container->services['kernel'] ?? $container->get('kernel', 1)));
        $c = new \Doctrine\Common\Annotations\PsrCachedReader(($container->privates['annotations.reader'] ?? $container->load('getAnnotations_ReaderService')), new \Symfony\Component\Cache\Adapter\ArrayAdapter(), false);
        $c->cacheProviderBackup = function () use ($container) {
            return ($container->privates['annotations.cache_adapter'] ?? $container->getAnnotations_CacheAdapterService());
        };

        $d = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader($c, 'prod');

        $a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b, 'prod'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b, 'prod'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b, 'prod'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($b, 'prod'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b, 'prod'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', true],
        ], [
            'kernel' => 'App\\Kernel',
        ]), 'prod'));
        $a->addLoader($d);
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $d));
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $d));

        return $container->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, ['utf8' => true], []);
    }
}
