<?php

namespace Gonzakpo\AfipBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Gonzalo Alonso <gonkpo@gmail.com>
 */
class AfipBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }
}
