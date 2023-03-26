<?php

namespace DTO\Classes;

/**
 * Добавляем методы на отдачу
 */
class DTO_version2
{
    public int $id;
    public string $name;
    public int $category;

    public function toArray():array
    {
        return [];
    }

    public function toJson()
    {
        return '';
    }
}