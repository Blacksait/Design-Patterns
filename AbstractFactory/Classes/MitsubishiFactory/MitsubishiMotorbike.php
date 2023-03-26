<?php

namespace AbstractFactory\Classes\MitsubishiFactory;

use AbstractFactory\Interfaces\MotorbikeInterface;

class MitsubishiMotorbike implements MotorbikeInterface
{

    public function showBikeConfiguration()
    {
        return [
            "Type" => "Ducati 1199s",
            "Speed" => 270,
            "Price" => 3300000
        ];
    }
}