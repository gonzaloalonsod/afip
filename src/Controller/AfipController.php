<?php

namespace Gonzakpo\AfipBundle\Controller;

use Afip;

/**
 * @author Gonzalo Alonso <gonkpo@gmail.com>
 */
class AfipController
{
    private $project_dir;
    private $afip_parameters;
    private $afip;

    public function __construct($afip_parameters, $project_dir)
    {
        $this->project_dir = $project_dir;
        $this->parseParameters($afip_parameters);

        if ($this->afip_parameters) {
            $this->afip = new Afip($this->afip_parameters);
        }
    }

    private function parseParameters($afip_parameters)
    {
        if ($afip_parameters['CUIT'] > 0) {
            $afip_parameters['res_folder'] = $this->project_dir."/".$afip_parameters['res_folder'];
            $afip_parameters['ta_folder'] = $this->project_dir."/".$afip_parameters['ta_folder'];
        } else {
            $afip_parameters = null;
        }

        $this->afip_parameters = $afip_parameters;
    }

    public function createAfip($afip_parameters)
    {
        $this->parseParameters($afip_parameters);

        if ($this->afip_parameters) {
            $this->afip = new Afip($this->afip_parameters);
        }
    }

    public function getWS()
    {
        return $this->afip;
    }
}
