<?php

namespace Adapter\Classes;

use Adapter\Interfaces\NewLibraryInterface;

class NewLibrary implements NewLibraryInterface
{

    public function getImage($file)
    {
        return md5($file);
    }

    public function sendImage($file)
    {
        return "{$file} - has been sent";
    }

    public function getPreview($params){
        return "Cool IMG - {$params}";
    }
}