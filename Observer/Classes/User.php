<?php

namespace Observer\Classes;

class User
{
    private $name;
    private $age;

    public function getName()
    {
        return $this->name;
    }

    public function createUser($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}