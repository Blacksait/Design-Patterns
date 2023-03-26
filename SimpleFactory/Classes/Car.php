<?php

namespace SimpleFactory\Classes;

use SimpleFactory\Interfaces\DeliveryTypeInterface;

class Car implements DeliveryTypeInterface
{
    function setDriver($value):DeliveryTypeInterface
    {
        $this->driver = $value;
        return $this;
    }

    function setDate($value):DeliveryTypeInterface
    {
        $this->date = $value;
        return $this;
    }
}