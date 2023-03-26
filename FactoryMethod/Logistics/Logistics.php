<?php

namespace FactoryMethod\Logistics;

use FactoryMethod\Interfaces\DeliveryTypeInterface;

abstract class Logistics//Базовый класс фабрики
{
    public function delivery(){
        $deliveryType = $this->createDeliveryType();//Фаричный метод
        $date = $deliveryType->planDate();
        $driver = $deliveryType->getDriver();

        return $deliveryType->makeDelivery($date,$driver);
    }

    abstract function createDeliveryType():DeliveryTypeInterface;
}