<?php

namespace DTO\Classes;

class DTO_version4
{
    public int $id;
    public string $name;
    public int $category;

    public static function createFromRequest(Request $request):self
    {
        return self::createFromArray($request->validate());
    }

    public static function createFromArray(array $data):self
    {
        $dto = new self();

        //Прямое присваивание
        $dto->id = $data["id"];
        $dto->name = $data["name"];
        $dto->category = $data["category"];

        //Магия
        $arg = get_class_vars(self::class);
        foreach ($data as $key => $item){
            if (array_key_exists($key,$arg)){
                $dto->$key = $item;
            }else{
                throw new \Exception("{$item} - invalid");
            }
        }

        return $dto;
    }
}