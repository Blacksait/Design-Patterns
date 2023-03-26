<?php

namespace AbstractFactory\Classes\BMWFactory;

use AbstractFactory\Interfaces\CarInterface;

class BMWCar implements CarInterface
{

    public function showCarConfiguration()
    {
        return [
            "Type" => "BMW M3",
            "Speed" => 360,
            "Price" => 89000000
        ];
    }
}