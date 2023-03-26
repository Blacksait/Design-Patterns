<?php
namespace Proxy\Logger;

use Proxy\Classes\BaseClass;
use Proxy\Interfaces\BaseInterface;

class BaseClassLoggerProxy implements BaseInterface
{
    private BaseInterface $obj;

    public function __construct()
    {
        $this->obj = new BaseClass();
        $this->user = ["id"=>5,"name"=>"Oleg"];//Условное обращение к БД
        $this->comment = ["Top","Good!"];//Условное обращение к БД
        $this->rate = (10 + 5) / 2;//Условный расчет
    }

    /**
     * Добавили логирование
     * @param array $dataOrder
     * @return BaseClass
     */
    public function create(array $dataOrder): BaseClass
    {
        echo "\033[43mЛогироване заказа:\033[0m\n";
        return $this->obj->create($dataOrder);
    }
}