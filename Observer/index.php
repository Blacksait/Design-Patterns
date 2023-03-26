<?php
namespace Observer;

use Observer\Classes\Logger;
use Observer\Classes\Notifier;
use Observer\Classes\OrderCreateService;

require_once __DIR__ . '/../vendor/autoload.php';

$logger = new Logger();
$notifier = new Notifier();

$orderService = new OrderCreateService();

$orderService->attach($logger);
$orderService->attach($notifier,'create');

$id = $orderService->createUser([
    'name' => 'Ann',
    'age' => 22
]);

print_r(PHP_EOL);

$orderService->deleteUser($id);

$orderService->detach($logger);

print_r(PHP_EOL);

$orderService->createUser([
    'name' => 'Jon',
    'age' => 32
]);