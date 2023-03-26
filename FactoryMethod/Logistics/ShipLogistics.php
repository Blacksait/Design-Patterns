<?php

namespace FactoryMethod\Logistics;

use FactoryMethod\Interfaces\DeliveryTypeInterface;
use FactoryMethod\Classes\Ship;
/**
 * Фабрика
 */
class ShipLogistics extends Logistics
{
    public function createDeliveryType(): DeliveryTypeInterface
    {
        return new Ship();
    }
}