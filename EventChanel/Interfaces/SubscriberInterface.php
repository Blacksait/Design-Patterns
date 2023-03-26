<?php

namespace EventChanel\Interfaces;

interface SubscriberInterface
{
    public function notify($good);
}