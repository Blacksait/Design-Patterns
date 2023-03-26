<?php

namespace Delegation\Interfaces;

interface CourierServiceInterface
{
    public function setSender($value);

    public function setRecipient($value);

    public function deliver();

}