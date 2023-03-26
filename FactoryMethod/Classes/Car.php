<?php

namespace FactoryMethod\Classes;

use FactoryMethod\Interfaces\DeliveryTypeInterface;
/**
 * Продукт
 */
class Car implements DeliveryTypeInterface
{
    function planDate()
    {
        return date("Y-m-d H:i:s");
    }

    function getDriver()
    {
        return 'Шумахер';
    }

    function makeDelivery($date,$driver)
    {
        return "{$driver} повезет {$date} числа, на машине";
    }
}