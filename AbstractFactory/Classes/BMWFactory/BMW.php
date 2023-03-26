<?php

namespace AbstractFactory\Classes\BMWFactory;

use AbstractFactory\Interfaces\CarInterface;
use AbstractFactory\Interfaces\CompanyVehicleFactoryInterface;
use AbstractFactory\Interfaces\MotorbikeInterface;

class BMW implements CompanyVehicleFactoryInterface
{

    public function getCar():CarInterface
    {
        return new BMWCar();
    }

    public function getMotorbike():MotorbikeInterface
    {
        return new BMWMotorbike();
    }
}