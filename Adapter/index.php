<?php
namespace Adapter;

use Adapter\Classes\LegacyLibrary;
use Adapter\Classes\LibraryAdapter;

require_once __DIR__ . '/../vendor/autoload.php';

$legacyLibrary = new LegacyLibrary();

print_r($legacyLibrary->findMedia('/test.png').PHP_EOL);
print_r($legacyLibrary->uploadMedia('/test.png').PHP_EOL.PHP_EOL);

$newLibrary = new LibraryAdapter();
print_r($newLibrary->findMedia('/test.png').PHP_EOL);
print_r($newLibrary->uploadMedia('/test.png').PHP_EOL.PHP_EOL);

/**
 * Написали обертку для дополнительных методов нового класса
 */
print_r($newLibrary->getPreview('/test.png').PHP_EOL);

