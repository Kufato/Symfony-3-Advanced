<?php

namespace App\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\Config\Definition\Processor;

class AppExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $processor = new Processor();
        $configuration = new Configuration();
        $processedConfig = $processor->processConfiguration($configuration, $configs);

        $container->setParameter('d07.number', $processedConfig['number']);
        $container->setParameter('d07.enable', $processedConfig['enable']);
    }

    public function getAlias(): string
    {
        return 'd07';
    }
}