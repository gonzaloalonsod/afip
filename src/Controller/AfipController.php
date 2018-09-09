<?php

namespace Gonzakpo\AfipBundle\Controller;

use Afip;

/**
 * @author Gonzalo Alonso <gonkpo@gmail.com>
 */
class AfipController
{
    private $afip;

    public function __construct()
    {
        $this->afip = new Afip(array('CUIT' => 20307919452));
    }
}
