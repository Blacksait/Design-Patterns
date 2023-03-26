<?php

namespace PropertyContainer\Classes;

use PropertyContainer\Interfaces\PropertyContainerInterface;

class PropertyContainer implements PropertyContainerInterface
{
    private array $propertyContainer = [];

    function AddProperty($propertyName, $value)
    {
        $this->propertyContainer[$propertyName] = $value;
    }

    function getProperty($propertyName)
    {
        return $this->propertyContainer[$propertyName] ?? null;
    }

    function deleteProperty($propertyName)
    {
        unset($this->propertyContainer[$propertyName]);
    }

    function updateProperty($propertyName, $value)
    {
       if(!isset($this->propertyContainer[$propertyName])){
           throw new \Exception("Property {$propertyName} not found");
       }

       $this->propertyContainer[$propertyName] = $value;
    }
}