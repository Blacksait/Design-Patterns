<?php

namespace AbstractFactory\Classes;

use AbstractFactory\Classes\BMWFactory\BMW;
use AbstractFactory\Classes\MitsubishiFactory\Mitsubishi;
use AbstractFactory\Interfaces\CompanyVehicleFactoryInterface;

class CompanyFactory
{
    /**
     * @throws \Exception
     */
    public function getFactory($type):CompanyVehicleFactoryInterface
    {

        switch ($type){
            case "BMW":
                $factory = new BMW();
                break;
            case "mitsubishi":
                $factory = new Mitsubishi();
                break;
            default:
                throw new \Exception("Invalid factory: {$type}");
        }
        return $factory;
    }
}