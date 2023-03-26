<?php

namespace AbstractFactory\Classes\MitsubishiFactory;

use AbstractFactory\Interfaces\CarInterface;
use AbstractFactory\Interfaces\CompanyVehicleFactoryInterface;
use AbstractFactory\Interfaces\MotorbikeInterface;

class Mitsubishi implements CompanyVehicleFactoryInterface
{

    public function getCar(): CarInterface
    {
        return new MitsubishiCar();
    }

    public function getMotorbike(): MotorbikeInterface
    {
        return new MitsubishiMotorbike();
    }
}