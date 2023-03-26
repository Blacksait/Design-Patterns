<?php
namespace Decorator;

class config
{
    /**
     * @var $configParams
     */
    private static $configParams = [
        'fromManager' => [
            [
                'name' => 'log',
                'enabled' => 1,
                'Sort' => 2,
                'decorators_class' => \Decorator\Classes\ManagerLoggerOrderUpdateDecorator::class
            ], [
                'name' => 'notified',
                'enabled' => 1,
                'Sort' => 1,
                'decorators_class' => \Decorator\Classes\ManagerNotifiedOrderUpdateDecorator::class
            ]
        ],
        'fromAdmin' => [
            [
                'name' => 'notified',
                'enabled' => 1,
                'Sort' => 1,
                'decorators_class' => \Decorator\Classes\ManagerNotifiedOrderUpdateDecorator::class
            ]
        ]
    ];

    public static function get($key)
    {
        foreach (self::$configParams[$key] as $el){
            if ($el['enabled'])
                $response[] = $el;
        }
        //Сортируем параметр вызова классов Sort
        usort($response, function($a,$b){
            return strcmp($a["Sort"], $b["Sort"]);
        });

        return $response;
    }
}