<?php

namespace FactoryMethod\Logistics;

use FactoryMethod\Interfaces\DeliveryTypeInterface;
use FactoryMethod\Classes\Car;
/**
 * Фабрика
 */
class CarLogistics extends Logistics
{
    public function createDeliveryType(): DeliveryTypeInterface
    {
        return new Car();
    }
}