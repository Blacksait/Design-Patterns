<?php

namespace Multiton\Traits;

use Multiton\Interfaces\MultitonInterface;

trait MultitonTrait
{
    protected static $instance = [];

    private function __construct()
    {
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

//    private function __wakeup()
//    {
//        // TODO: Implement __wakeup() method.
//    }

    public static function getInstance($value):MultitonInterface
    {
        if (isset(static::$instance[$value])){
            return static::$instance[$value];
        }

        static::$instance[$value] = new static();
        return static::$instance[$value];
    }


}