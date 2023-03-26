<?php

namespace Observer\Classes;

use SplObserver;

/**
 * SplSubject встроенный интерфейс по реализации патерна Observe
 **/

class OrderCreateService implements \SplSubject
{
    private $observers = [];

    public function __construct()
    {
        $this->observers['*'] = [];//Для подписчиков, которые хотят следить за всеми изменениями
    }

    public function getObservers(string $event = '*')
    {
        $this->initEventGroup($event);
        $groupEvent = $this->observers[$event];
        $all = $this->observers["*"];
        return array_merge($groupEvent,$all);
    }

    private function initEventGroup(string $event = "*"): void
    {
        if (!isset($this->observers[$event])) {
            $this->observers[$event] = [];
        }
    }

    public function attach(\SplObserver $observer,string $event = '*'):void
    {
        $this->initEventGroup();

        $this->observers[$event][] = $observer;

    }

    public function detach(\SplObserver $observer,string $event = '*'):void
    {
        foreach ($this->getObservers($event) as $key => $el){
            if ($el == $observer){
                unset($this->observers[$event][$key]);
            }
        }
    }

    public function notify(string $event = "*", User $user = null):void
    {
        foreach ($this->getObservers($event) as $observer){
            /**
             * @var \SplObserver $observer
             */
            $observer->update($this,$event,$user);
        }
    }

    public function createUser($data)
    {
        $user = new User();
        $user->createUser($data['name'],$data['age']);
        echo "Пользователь {$user->getName()} создан\n";

        $this->notify('create',$user);

        return rand(0,100);//ID
    }

    public function deleteUser($id)
    {
        $user = new User();
        echo "Пользователь {$user->getName()} удален\n";

        $this->notify('delete',$user);
    }
}