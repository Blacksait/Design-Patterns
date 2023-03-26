<?php
namespace FactoryMethod;

require_once __DIR__.'/../vendor/autoload.php';

use FactoryMethod\Logistics\CarLogistics;
use FactoryMethod\Logistics\ShipLogistics;

/**
 * Класс объявляет фабричный метод delivery(), который должен возвращать новые объекты Типов доставок.
 * Результата совпадает с общим интерфейсом DeliveryTypeInterface.
 */


$carClass = new CarLogistics();
$car_response = $carClass->delivery();

$shipClass = new ShipLogistics();
$ship_response = $shipClass->delivery();

print_r($car_response);
print_r(PHP_EOL);
print_r($ship_response);




