<?php

namespace Gonzaloalonsod\AfipBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('afip');
        $rootNode = $treeBuilder->getRootNode('parameters');

        $rootNode
            ->children()
                ->scalarNode('CUIT')
                    ->defaultValue(0)
                ->end()
                ->booleanNode('production')
                    ->defaultFalse()
                ->end()
                ->scalarNode('res_folder')
                    ->defaultValue('config/packages/afip_res/')
                ->end()
                ->scalarNode('ta_folder')
                    ->defaultValue('config/packages/afip_res/')
                ->end()
                ->scalarNode('cert')
                    ->defaultValue('cert')
                ->end()
                ->scalarNode('key')
                    ->defaultValue('key')
                ->end()
                ->scalarNode('passphrase')
                   ->defaultValue('')
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
