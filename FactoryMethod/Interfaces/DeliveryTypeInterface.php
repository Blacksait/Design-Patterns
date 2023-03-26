<?php

namespace FactoryMethod\Interfaces;

interface DeliveryTypeInterface
{
    function planDate();
    function getDriver();
    function makeDelivery($date,$driver);
}