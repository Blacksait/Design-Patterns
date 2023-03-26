<?php

namespace StaticFactory\Interfaces;

interface DeliveryTypeInterface
{
    function setDriver($value):DeliveryTypeInterface;
    function setDate($value):DeliveryTypeInterface;
}