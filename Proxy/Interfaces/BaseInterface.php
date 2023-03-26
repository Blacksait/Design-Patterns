<?php

namespace Proxy\Interfaces;

use Proxy\Classes\BaseClass;

interface BaseInterface
{
    public function create(array $dataOrder):BaseClass;
}