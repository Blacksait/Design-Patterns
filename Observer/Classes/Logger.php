<?php

namespace Observer\Classes;

use SplSubject;

class Logger implements \SplObserver
{

    public function update(SplSubject $subject,string $event = '',User $user = null):void
    {
        echo "Logger отреагировал на {$event}:{$user->getName()}\n";
    }
}