<?php
namespace Delegation;

require_once __DIR__.'/../vendor/autoload.php';

use Delegation\Classes\AppCourierService;

$class = new AppCourierService();

$class->setSender("Анна");//Можно прописать return $this, чтобы обращаться к $this->setSender->setRecipient
$class->setRecipient("Ваня");
$class->deliver();

echo PHP_EOL;

$class->TrainDelivery();
$class->setSender("Олег");
$class->setRecipient("Руслан");
$class->deliver();