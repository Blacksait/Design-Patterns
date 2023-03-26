<?php

namespace EventChanel\Classes;

use EventChanel\Interfaces\SubscriberInterface;

class EventChanel implements \EventChanel\Interfaces\EventChanelInterface
{
    private array $subscriberToGoods;

    public function subscribe($good,SubscriberInterface $subscriber)
    {
        $this->subscriberToGoods[$good][] = $subscriber;
    }

    public function published($good)
    {
        if (empty($this->subscriberToGoods[$good])){
            return;
        }

        foreach ($this->subscriberToGoods[$good] as $subscriber)
        {
            /** @var SubscriberInterface $subscriber */
            $subscriber->notify($good);
        }
    }
}