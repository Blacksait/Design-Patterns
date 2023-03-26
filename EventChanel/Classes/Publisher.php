<?php

namespace EventChanel\Classes;

use EventChanel\Interfaces\EventChanelInterface;
use EventChanel\Interfaces\PublisherInterface;

class Publisher implements PublisherInterface
{
    private string $name;

    /**
     * @var EventChanelInterface
     */
    private $eventChanel;

    public function __construct($name,EventChanelInterface $eventChanel)
    {
        $this->name = $name;
        $this->eventChanel = $eventChanel;
    }

    public function published($goods)
    {
        foreach ($goods as $good){
            $this->eventChanel->published($good);
        }
    }
}