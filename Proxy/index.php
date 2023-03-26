<?php
namespace Proxy;

use Proxy\Classes\BaseClass;
use Proxy\Lazyload\BaseClassLazyLoadProxy;
use Proxy\Logger\BaseClassLoggerProxy;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * У нас есть условный супер-класс, это может быть как сторонняя библиотека, так и внутренний класс
 */
$class = new BaseClass();

/**
 * Добавляем Логирование
 */

$class = new BaseClassLoggerProxy();

/**
 * Чтобы уменьшить кол-во запросов к БД, можно сделать отложенную инициализацию с помощью Proxy.
 * Если уберем параметр, то не будет запроса в БД
 */
$class = new BaseClassLazyLoadProxy();

/**
 * Неизменяемый функционал, может быть клиентский код, ожидающим интерфейс
 */
$class->create([$class->user,$class->comment,$class->rate]);

/*
 * Можно добавить доп параметры для демонстрации функционала __get()
*/
//$class->create([$class->user,$class->comment,$class->rate,$class->advParams]);