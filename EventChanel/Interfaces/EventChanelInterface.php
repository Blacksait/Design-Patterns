<?php

namespace EventChanel\Interfaces;

interface EventChanelInterface
{
    public function subscribe($good,SubscriberInterface $subscriber);
    public function published($good);
}