<?php

namespace SimpleFactory\Interfaces;

interface DeliveryTypeInterface
{
    function setDriver($value):DeliveryTypeInterface;
    function setDate($value):DeliveryTypeInterface;
}