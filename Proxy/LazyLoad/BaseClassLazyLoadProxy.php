<?php
namespace Proxy\Lazyload;

use Proxy\Classes\BaseClass;
use Proxy\Interfaces\BaseInterface;

class BaseClassLazyLoadProxy implements BaseInterface
{
    private BaseInterface $obj;
    private $user;
    private $comment;
    private $rate;
    private $advParams;

    public function __construct()
    {
        $this->obj = new BaseClass();
        $this->advParams = 'Доп параметры';

        /*
         * Для наглядности вреда запросов в construct
         */
        echo "\033[41mЗапрос в БД, параметр construct - name\033[0m\n";
        echo "\033[41mЗапрос в БД, параметр construct - comment\033[0m\n";
        echo "\033[41mЗапрос в БД, параметр construct - rate\033[0m\n";
    }

    /**
     * В исходном классе параметры получаются в construct, в Proxy при обращении к переменной, вызываем нужный метод
     * @param $name
     * @return false|mixed
     */
    public function __get($name)
    {
        return (property_exists(get_class($this),$name) && is_callable(array($this, $name))) ?
            $this->$name() : $this->$name;
    }

    public function create(array $dataOrder): BaseClass
    {
        echo "\033[42mЗаказ сохранен c параметрами:\033[0m\n".print_r($dataOrder,true);
        return $this->obj;
    }

    public function user()
    {
        $method = __FUNCTION__;
        if (is_null($this->user)){
            $this->user = ["id"=>2,"name"=>"Anna"];//Условное обращение к БД
        }
        echo "\033[41mЗапрос в БД, метод - {$method}\033[0m\n";
        return $this->user;
    }

    public function comment()
    {
        $method = __FUNCTION__;
        if (is_null($this->comment)){
            $this->comment = ["Top","Good!"];//Условное обращение к БД
        }
        echo "\033[41mЗапрос в БД, метод - {$method}\033[0m\n";
        return $this->comment;
    }

    public function rate()
    {
        $method = __FUNCTION__;
        if (is_null($this->rate)){
            $this->rate = (10 + 8) / 2;//Условный расчет
        }
        echo "\033[41mЗапрос в БД, метод - {$method}\033[0m\n";
        return $this->rate;
    }
}