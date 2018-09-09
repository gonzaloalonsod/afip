<?php

namespace Gonzakpo\AfipBundle\Controller;

use Afip;

/**
 * @author Gonzalo Alonso <gonkpo@gmail.com>
 */
class AfipController
{
    private $afip;

    public function createAfip($cuit)
    {
        $this->afip = new Afip(array('CUIT' => $cuit));
    }
}
