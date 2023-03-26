<?php

namespace EventChanel\Interfaces;

use EventChanel\Classes\EventChanel;

interface PublisherInterface
{
    public function published($goods);
}