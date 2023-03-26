<?php

/**
 * Чтобы не вызывать запросы к бд или расчетам при каждом создании класса. Обращаемся к БД, только когда нам надо.
 */
class BlogPost1
{
    private $user;
    private $comment;
    private $rate;

    /**
     * Выносим инициализацию свойств в методы
     */
//    public function __construct()
//    {
//        $this->user = ["id"=>5,"name"=>"Oleg"];//Условное обращение к БД
//        $this->comment = ["Top","Good!"];//Условное обращение к БД
//        $this->rate = (10 + 5) / 2;//Условный расчет
//    }

    public function getUser()
    {
        if (is_null($this->user)){
            $this->user = ["id"=>5,"name"=>"Oleg"];//Условное обращение к БД
        }

        return $this->user;
    }

    public function getComment()
    {
        if (is_null($this->comment)){
            $this->comment = ["Top","Good!"];//Условное обращение к БД
        }

        return $this->comment;
    }

    public function calculateRate()
    {
        if (is_null($this->rate)){
            $this->rate = (10 + 5) / 2;//Условный расчет
        }

        return $this->rate;
    }

}

class BlogPost2
{
    public $user;
    public $comment;
    public $rate;

    /**
     * Плохой пример Супер класса
     */
    public function __construct()
    {
        $this->user = ["id"=>5,"name"=>"Oleg"];//Условное обращение к БД
        $this->comment = ["Top","Good!"];//Условное обращение к БД
        $this->rate = (10 + 5) / 2;//Условный расчет
    }
}


$class1 = new BlogPost1();
$comment1 = $class1->getComment();

$class2 = new BlogPost2();
$comment2 = $class2->comment;

print_r($class1);
print_r($class2);
