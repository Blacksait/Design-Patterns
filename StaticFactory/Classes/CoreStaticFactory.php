<?php

namespace StaticFactory\Classes;

use StaticFactory\Interfaces\DeliveryTypeInterface;

class CoreStaticFactory
{
    /**
     * @throws \Exception
     */
    public static function build($type):DeliveryTypeInterface
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