<?php

namespace PropertyContainer\Classes;

use PropertyContainer\Interfaces\PropertyContainerInterface;

class BlogPost
{
    private $category;

    private $title;

    public function __construct(PropertyContainerInterface $propertyContainerInterface)
    {
        $this->propertyContainer = $propertyContainerInterface;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getCategory(){
        return $this->category;
    }

    public function setCategory($category){
        $this->category = $category;
    }
}