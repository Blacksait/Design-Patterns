<?php

namespace EventChanel\Classes;

class Subscriber implements \EventChanel\Interfaces\SubscriberInterface
{
    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function notify($good)
    {
        echo "{$this->name} уведомлен о приходе - {$good} \n";
    }
}