<?php
namespace EventChanel;

use EventChanel\Classes\EventChanel;
use EventChanel\Classes\Publisher;
use EventChanel\Classes\Subscriber;

require_once __DIR__ . '/../vendor/autoload.php';

$eventChanel = new EventChanel();

$publisher1 = new Publisher('Provider1',$eventChanel);

$subscriber1 = new Subscriber('Ann');
$subscriber2 = new Subscriber('Jon');
$subscriber3 = new Subscriber('Mark');

$eventChanel->subscribe('apple',$subscriber1);
$eventChanel->subscribe('apple',$subscriber2);
$eventChanel->subscribe('banana',$subscriber3);

$publisher1->published(['apple']);