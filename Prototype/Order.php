<?php

namespace Prototype;

class Order
{
    public $id;

    public $place;

    private $client;

    public function __construct($id,Place $place, Client $client)
    {
        $this->id = $id;
        $this->place = $place;
        $this->client = $client;
    }

    public function __clone()
    {
        $this->id = $this->id . '_copy';
        $this->place = clone $this->place;//Клонируем все зависимости, чтобы при изм 1 заказа не менялся клонируемый класс
        $this->client->addOrder($this);
    }
}