<?php

namespace Decorator\Classes;

use Decorator\Interfaces\OrderUpdateInterface;

abstract class Decorator implements OrderUpdateInterface
{
    /** @var OrderUpdateInterface */
    protected $decoratedObject;

    public function __construct(OrderUpdateInterface $order)
    {
        $this->decoratedObject = $order;
    }

    public function run(Order $order, array $dataOrder): Order
    {
        $this->actionBefore();
        $this->actionMain($order,$dataOrder);
        $this->actionAfter();

        return $order;
    }

    /*
     * Не делаем абстрактными, т.к в дочерних классах может понадобиться только 1 функционал
     */
    protected function actionBefore()
    {
    }

    /*
     * Если надо переопределить главный метод, позволяем, исходя из описания шаблона
     */
    protected function actionMain($order,$dataOrder):Order
    {
        return $this->decoratedObject->run($order,$dataOrder);
    }

    protected function actionAfter()
    {
    }
}