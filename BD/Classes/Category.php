<?php
namespace BD\Classes;
use BD\Interfaces\ModelInterface;

class Category implements ModelInterface
{
    protected static $table = 'category';
    public static $foreign = 'id';

    public static function getTable(){
        return static::$table;
    }

    public static function getForeignKey(){
        return static::$foreign;
    }
}