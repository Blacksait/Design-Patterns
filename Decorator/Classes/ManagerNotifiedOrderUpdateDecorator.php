<?php

namespace Decorator\Classes;

class ManagerNotifiedOrderUpdateDecorator extends Decorator
{
    public function actionBefore()
    {
        echo "\033[44mУведомляем менеджера ДО\033[0m\n";
    }
    public function actionAfter()
    {
        echo "\033[44mУведомляем менеджера ПОСЛЕ\033[0m\n";
    }
}