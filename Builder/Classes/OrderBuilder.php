<?php

namespace Builder\Classes;

use Builder\Interfaces\OrderBuilderInterface;

class OrderBuilder implements OrderBuilderInterface
{
    /**
     * @var Order
     */
    private $order;

    public function __construct()
    {
        $this->create();
    }

    public function create(): OrderBuilderInterface
    {
        $this->order = new Order();

        return $this;
    }

    public function setRecipient($value): OrderBuilderInterface
    {
        $this->order->recipient = $value;

        return $this;
    }

    public function setType($value): OrderBuilderInterface
    {
        $this->order->type = $value;

        return $this;
    }

    public function setCargo($value): OrderBuilderInterface
    {
        $this->order->cargo = $value;

        return $this;
    }

    public function get(): Order
    {
        $result = $this->order;
        $this->create();

        return $result;
    }
}