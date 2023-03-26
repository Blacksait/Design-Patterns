<?php

namespace DTO\Classes;

/*
 * DTO (Data Transfer Object) - Объект передачи данных
 *
 * DTO - это объект, который переносит данные между системами
 * (веб-сервисы, подсистемы или процессы одного приложения)
 *
 * Шаблон проектирования DTO изначально был придуман для решения проблемы передачи данных между системами (веб-сервисами).
 * Первичная цель DTO заключалась в передаче данных при дорогостоящих удаленных вызовах.
 * Вместо нескольких вызовов и передачи нескольких объектов делается один вызов и передается один собирательный объект.
 *
 * Так же решаются проблемы:
 * - Ошибки при сериализация передаваемых объектов
 * - Сложная многоуровневая структура объектов
 * - Ненужные (излишние) для передачи данные
 *
 * Объект DTO не должен содержать никакого поведения (никакой бизнес-логики), кроме хранения, извлечения, сериализации и десериализации
 * собственных данных.
 */
/**
 * Самый простой способ
 */
class DTO_version1
{
    public int $id;
    public string $name;
    public int $category;
}