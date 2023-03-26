<?php

namespace DTO\Classes;

/* !!!Лучший Вариант!!! */

/**
 * Фабрика создания DTO конкретной модели
 *
 * Если DTO сложно создавать, то можно добавить private методы и разбить логику
 *
 */
class DTOModelFactory
{
    public static function fromRequest(Request $request):DTOModelFactory
    {
        return self::createFromArray($request->validate());
    }

    public static function fromArray(array $data):DTOModelFactory
    {
        $dto = new DTOModelFactory();

        //Прямое присваивание
        $dto->id = $data["id"];
        //2 варианта
        $dto->name = self::getNameFromId($dto->id);
        $dto->category = $dto->getCategoryFromId($dto->id);

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

    private static function getNameFromId($id):string
    {
        return "Jon";
    }

    private function getCategoryFromId($id):int
    {
        return 125;
    }
}