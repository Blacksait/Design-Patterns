<?php
namespace PropertyContainer;

require_once __DIR__.'/../vendor/autoload.php';
use PropertyContainer\Controllers\MainController;

$class = new MainController();
$class->PropertyContainer();