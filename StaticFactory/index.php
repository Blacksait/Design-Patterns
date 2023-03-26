<?php

namespace StaticFactory;

use StaticFactory\Classes\CoreStaticFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$car = CoreStaticFactory::build("car");
print_r($car);

print_r(PHP_EOL);

$ship = CoreStaticFactory::build("ship");
print_r($ship);