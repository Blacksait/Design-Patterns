<?php

namespace Decorator\Classes;

/**
 * Декоратор должен иметь 1 ответственность, он должен быть примитивным
 */
class ManagerLoggerOrderUpdateDecorator extends Decorator
{
    //Переопределяем родительский метод
    public function actionBefore()
    {
        echo "\033[43mЛогируем заказ для менеджера ДО\033[0m\n";
    }
    public function actionAfter()
    {
        echo "\033[43mЛогируем заказ для менеджера ПОСЛЕ\033[0m\n";
    }
}