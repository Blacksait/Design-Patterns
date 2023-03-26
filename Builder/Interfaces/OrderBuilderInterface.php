<?php

namespace Builder\Interfaces;

use Builder\Classes\Order;

interface OrderBuilderInterface
{
    public function create():OrderBuilderInterface;

    public function setRecipient($value):OrderBuilderInterface;

    public function setType($value):OrderBuilderInterface;

    public function setCargo($value):OrderBuilderInterface;

    public function get():Order;
}