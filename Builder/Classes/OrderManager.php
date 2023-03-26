<?php

namespace Builder\Classes;

use Builder\Interfaces\OrderBuilderInterface;

/**
 * Сценарии билдера
 */
class OrderManager
{
    private $builder;

    public function __construct()
    {
        $this->builder = new OrderBuilder();
    }

    public function createWebsiteOrder()
    {
        $order = $this->builder
            ->setCargo("Очки")
            ->setType("Заказ создан с сайта")
            ->setRecipient("Анна")
            ->get();

        return $order;
    }

    public function createAdminOrder()
    {
        $order = $this->builder
            ->setCargo("Люстра")
            ->setType("Заказ создан из админ панели")
            ->setRecipient("Анна")
            ->get();

        return $order;
    }

    public function createAPIOrder()
    {
        $order = $this->builder
            ->setCargo("Шкаф")
            ->setType("Заказ создан из API")
            ->setRecipient("Николай")
            ->get();

        return $order;
    }

}