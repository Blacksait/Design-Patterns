<?php
namespace Decorator;

use Decorator\Classes\BaseOrderUpdate;
use Decorator\Classes\DecoratorConfig;
use Decorator\Classes\ManagerLoggerOrderUpdateDecorator;
use Decorator\Classes\ManagerNotifiedOrderUpdateDecorator;
use Decorator\Classes\Order;
use Decorator\Classes\UpdateOrderManager;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Декоратор (англ. Decorator) — структурный шаблон проектирования,
 * предназначенный для динамического подключения дополнительного поведения к объекту.
 * Шаблон Декоратор предоставляет гибкую альтернативу практике создания подклассов с целью расширения функциональности.
 * Задача - Объект, который предполагается использовать, выполняет основные функции.
 * Однако может потребоваться добавить к нему некоторую дополнительную функциональность,
 * которая будет выполняться до, после или даже вместо основной функциональности объекта.
 */

$order = new Order();
$orderData = [
    "id" => 12,
    "recipient" => "Anna",
    "name" => "Guitar",
    "price" => 65000
];
//Без Декоратора
//$baseUpdate = (new BaseOrderUpdate())->run($order,$orderData);

//Простой Декоратор
//$decoratorSimple = (new ManagerLoggerOrderUpdateDecorator(new BaseOrderUpdate()))->run($order,$orderData);

//Вложенный Декоратор (Матрешка)
//$decoratorInserted = (new ManagerNotifiedOrderUpdateDecorator(new ManagerLoggerOrderUpdateDecorator(new BaseOrderUpdate())))->run($order,$orderData);

//Выносим стэк Декораторов в отдельный класс
//$decoratorStack = (new UpdateOrderManager())->run($order,$orderData);

//Используем файл настроек
//$decoratorSettings = (new DecoratorConfig())->run($order,$orderData);