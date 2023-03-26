<?php

namespace DTO\Classes;

class Request
{
    public function validate(){
        return [
            "id" => 5,
            "name" => "Jon",
            "category" => 125
        ];
    }
}