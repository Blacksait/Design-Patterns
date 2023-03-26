<?php

namespace AbstractFactory\Classes\BMWFactory;

use AbstractFactory\Interfaces\MotorbikeInterface;

class BMWMotorbike implements MotorbikeInterface
{

    public function showBikeConfiguration()
    {
        return [
            "Type" => "BMW M 1000 RR",
            "Speed" => 220,
            "Price" => 7500000
        ];
    }
}