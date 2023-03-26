<?php

namespace Observer\Classes;

use SplSubject;

class Notifier implements \SplObserver
{

    public function update(SplSubject $subject,string $event = '',User $user = null):void
    {
        echo "Notifier отреагировал на {$event}:{$user->getName()}\n";
    }
}