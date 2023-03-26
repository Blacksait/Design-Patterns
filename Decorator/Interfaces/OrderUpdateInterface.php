<?php

namespace Decorator\Interfaces;

use Decorator\Classes\Order;

interface OrderUpdateInterface
{
    public function run(Order $order,array $dataOrder):Order;
}