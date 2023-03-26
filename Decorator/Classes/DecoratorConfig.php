<?php

namespace Decorator\Classes;

use Decorator\config;
use Decorator\Interfaces\OrderUpdateInterface;

class DecoratorConfig implements OrderUpdateInterface
{
    public function run(Order $order, array $dataOrder): Order
    {
        $updateDecorators = $this->createStackDecoratorsConfig($order);
        return $updateDecorators->run($order,$dataOrder);
    }

    private function createStackDecoratorsConfig($order)
    {
        $updateObj = new BaseOrderUpdate();
        $config = config::get('fromManager');
        foreach ($config as $item){
            $className = $item['decorators_class'];
            $updateObj = (new $className($updateObj));
        }

        return $updateObj;
    }
}