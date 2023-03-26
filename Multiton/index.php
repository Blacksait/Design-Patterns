<?php
namespace Multiton;

use Multiton\Classes\SimpleMultiton;

require_once __DIR__ . '/../vendor/autoload.php';

$multiton = SimpleMultiton::getInstance('test1');
$multiton->setCount(11);
print_r($multiton);

print_r(PHP_EOL);

$multiton = SimpleMultiton::getInstance('test1');
$multiton->setCount(3);
print_r($multiton);


$multiton2 = SimpleMultiton::getInstance('test2');
$multiton2->setCount(10);
print_r($multiton);

print_r(PHP_EOL);

$multiton2 = SimpleMultiton::getInstance('test2');
$multiton2->setCount(5);
print_r($multiton);

print_r(PHP_EOL);

print_r($multiton);
print_r($multiton2);