<?php

namespace FactoryMethod\Classes;

use FactoryMethod\Interfaces\DeliveryTypeInterface;
/**
 * Продукт
 */
class Ship implements DeliveryTypeInterface
{
    function planDate()
    {
        return date("Y-m-d H:i:s");
    }

    function getDriver()
    {
        return 'Морячок Папай';
    }

    function makeDelivery($date, $driver)
    {
        return "{$driver} повезет {$date} числа, на корабле";
    }
}