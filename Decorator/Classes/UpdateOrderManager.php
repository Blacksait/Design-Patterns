<?php

namespace Decorator\Classes;

use Decorator\Interfaces\OrderUpdateInterface;

class UpdateOrderManager implements OrderUpdateInterface
{
    public function run(Order $order, array $dataOrder): Order
    {
        $updateDecorators = $this->createStackDecorators();
        return $updateDecorators->run($order,$dataOrder);
    }

    private function createStackDecorators()
    {
        $orderLogger = new ManagerLoggerOrderUpdateDecorator(new BaseOrderUpdate());
        return new ManagerNotifiedOrderUpdateDecorator($orderLogger);
    }
}