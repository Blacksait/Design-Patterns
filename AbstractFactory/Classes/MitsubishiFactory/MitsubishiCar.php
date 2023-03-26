<?php

namespace AbstractFactory\Classes\MitsubishiFactory;

use AbstractFactory\Interfaces\CarInterface;

class MitsubishiCar implements CarInterface
{

    public function showCarConfiguration()
    {
        return [
            "Type" => "Mitsubishi ASX",
            "Speed" => 320,
            "Price" => 4500000
        ];
    }
}