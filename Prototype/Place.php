<?php

namespace Prototype;

class Place
{
    public $id;
    public $name;

    public function __construct($id,$name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}