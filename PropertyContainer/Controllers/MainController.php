<?php

namespace PropertyContainer\Controllers;

use PropertyContainer\Classes\BlogPost;
use PropertyContainer\Classes\PropertyContainer;
use PropertyContainer\Classes\PropertyContainer2;

class MainController
{
    /**
     * Контейнер свойств
     * @return void
     */
    public function PropertyContainer()
    {
        $name = 'Контейнер свойств';
        $description = 'Описание статьи';

        $propertyContainer = new PropertyContainer2();//Класс для примера инъекции через интерфейс
        $propertyContainer = new PropertyContainer();
        $item = new BlogPost($propertyContainer);//инъекция зависимостей

        $item->setCategory(3);
        $item->setTitle("Заголовок");

        $item->propertyContainer->AddProperty("count",20);

        print_r($item);

    }
}