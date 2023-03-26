<?php

namespace Multiton\Classes;

use Multiton\Interfaces\MultitonInterface;
use Multiton\Traits\MultitonTrait;

class SimpleMultiton implements MultitonInterface
{
    use MultitonTrait;

    private $count = 0;

    public function setCount($value){
        return $this->count = $value;
    }

}