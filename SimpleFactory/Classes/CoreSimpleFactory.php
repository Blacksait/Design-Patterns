<?php

namespace SimpleFactory\Classes;

use SimpleFactory\Interfaces\DeliveryTypeInterface;

class CoreSimpleFactory
{
    /**
     * @throws \Exception
     */
    public function build($type):DeliveryTypeInterface
    {
        switch ($type){
            case "car":
                $deliveryType = new Car();
                $deliveryType
                    ->setDriver("Шумахер")
                    ->setDate("2022-12-04");
                break;
            case "ship":
                $deliveryType = new Ship();
                $deliveryType
                    ->setDriver("Морячок Папай")
                    ->setDate("2022-12-10");
                break;
            default:
                throw new \Exception("Invalid type - {$type}");
        }

        return $deliveryType;
    }
}