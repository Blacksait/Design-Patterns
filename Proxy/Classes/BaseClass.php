<?php
namespace Proxy\Classes;

use Proxy\Interfaces\BaseInterface;

/**
 * Плохой пример Супер класса
 */
class BaseClass implements BaseInterface
{
    public $user;
    public $comment;
    public $rate;

    public function __construct()
    {
        $this->user = ["id"=>5,"name"=>"Oleg"];//Условное обращение к БД
        $this->comment = ["Top","Good!"];//Условное обращение к БД
        $this->rate = (10 + 5) / 2;//Условный расчет
    }

    /**
     * Супер важная логика, которую мы не можем менять
     */
    public function create($dataOrder):BaseClass
    {
        echo "\033[42mЗаказ сохранен c параметрами:\033[0m\n".print_r($dataOrder,true);
        return $this;
    }
}