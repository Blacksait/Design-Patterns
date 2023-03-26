<?php

namespace Delegation\Classes;

use Delegation\Interfaces\CourierServiceInterface;

abstract class CourierServiceAbstract implements CourierServiceInterface
{
    protected $sender;

    protected $recipient;

    public function setSender($value)
    {
        $this->sender = $value;
    }

    public function setRecipient($value)
    {
        $this->recipient = $value;
    }

    public function deliver()
    {
        echo "от - {$this->sender} к - {$this->recipient}";
    }
}