<?php

namespace DTO\Classes;

/**
 * Скрываем параметры, предоставляем методы (ООП)
 *
 * Это хорошо, когда класс предоставляет поведение, однако DTO не должен содержать бизнес-логики. Данная нагрузка - излишняя
 *
 * DTO - структура данных
 *
 * "Объект DTO не должен содержать никакого поведения (никакой бизнес-логики), кроме хранения, извлечения, сериализации и десериализации"
 */
class DTO_version3
{
    private int $id;
    private string $name;
    private int $category;

    public function __construct(int $id,string $name,int $category)
    {
        $this->id = $id;
        $this->name = $name;
        $this->category  = $category;
    }

    public function getID():int
    {
        return $this->id;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getCategory():int
    {
        return $this->category;
    }
}