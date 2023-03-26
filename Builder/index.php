<?php
namespace Builder;

use Builder\Classes\OrderBuilder;
use Builder\Classes\OrderManager;

require_once __DIR__ . '/../vendor/autoload.php';

$builder = new OrderBuilder();
$orders[] = $builder->setRecipient("Олег")
                   ->setType("Заказ создан без сценария")
                   ->setCargo("Книги")
                   ->get();

$orderManager = new OrderManager();

$orders[] = $orderManager->createWebsiteOrder();
$orders[] = $orderManager->createAdminOrder();
$orders[] = $orderManager->createAPIOrder();

print_r($orders);