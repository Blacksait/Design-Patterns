<?php
namespace Prototype;

require_once __DIR__ . '/../vendor/autoload.php';

$client = new Client(1,'Олег');
$place_1 = new Place(15,"Телевизор");
$order = new Order(5,$place_1,$client);

$client->addOrder($order);

$cloneOrder = clone $order;
$cloneOrder->place = new Place(12,"Гитара");

print_r($client);
print_r($order);
print_r($cloneOrder);

