<?php

namespace StaticFactory\Classes;

use StaticFactory\Interfaces\DeliveryTypeInterface;

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