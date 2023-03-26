<?php

namespace PropertyContainer\Interfaces;

interface PropertyContainerInterface
{
    function AddProperty($propertyName,$value);

    function getProperty($propertyName);

    function deleteProperty($propertyName);

    function updateProperty($propertyName,$value);
}