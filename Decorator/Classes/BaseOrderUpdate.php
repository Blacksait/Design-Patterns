<?php

namespace Decorator\Classes;

use Decorator\Interfaces\OrderUpdateInterface;

class BaseOrderUpdate implements OrderUpdateInterface
{
    public function run(Order $order, array $dataOrder): Order
    {
        echo "\033[42mЗаказ сохранен c параметрами:\033[0m\n".print_r($dataOrder,true);
        return $order;
    }
}