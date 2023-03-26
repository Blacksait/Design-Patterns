<?php

class singleton{
    private static $instance;

    public $count = 0;

    private function __construct()
    {
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    public static function instance(){
        return self::$instance ?? self::$instance = new static();
    }
}

$class = singleton::instance();
//print_r($class);
$class->count = 5;
//print_r($class);
$new_par = singleton::instance();
//print_r($new_par);
//$third = clone $new_par;//Нельзя клонировать
$third = $new_par;//Можно использовать
$third->count = 2;

print_r($class);
print_r($third);
