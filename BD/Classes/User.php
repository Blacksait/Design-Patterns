<?php
namespace BD\Classes;

use BD\Interfaces\ModelInterface;

class User implements ModelInterface
{
    public static $table = 'users';
    public static $foreign = 'id';
    protected $db;

    public static function getTable(){
        return static::$table;
    }
    public static function getForeignKey(){
        return static::$foreign;
    }

    public function __construct($mysqli)
    {
        $this->db = $mysqli;
    }

    public function category(){
        return $this->belongsTo(Category::class,'user_id');
    }

    public function belongsTo($relation_class,$foreign_key){
        $table = $relation_class::getTable();
        $cur_table = self::getTable();
        $cur_foreign = self::$foreign;

        $query = "SELECT {$table}.* FROM {$table} JOIN {$cur_table} ON {$cur_table}.{$cur_foreign} = {$table}.{$foreign_key}";
        $query_r = $this->db->query($query);

        if ($query_r->num_rows) {
            while ($result = $query_r->fetch_assoc()) {
                print_r($result);
            }
        }

        die();
    }
}