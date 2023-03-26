<?php

namespace Multiton\Interfaces;

interface MultitonInterface
{
    public static function getInstance($value):self;
}