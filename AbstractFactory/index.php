<?php
namespace AbstractFactory;

use AbstractFactory\Classes\CompanyFactory;

require_once __DIR__.'/../vendor/autoload.php';

/**
 * В конфигах выставляем тип компании продукта
 */

$type = "BMW";//mitsubishi

$factory = (new CompanyFactory())->getFactory($type);

$carConfig = $factory->getCar()->showCarConfiguration();
$motorbike = $factory->getMotorbike()->showBikeConfiguration();


print_r($carConfig);
print_r(PHP_EOL);
print_r($motorbike);