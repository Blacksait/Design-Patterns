<?php

namespace SimpleFactory\Classes;

use SimpleFactory\Interfaces\DeliveryTypeInterface;

class Ship implements DeliveryTypeInterface
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