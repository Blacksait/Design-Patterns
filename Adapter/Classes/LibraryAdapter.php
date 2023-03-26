<?php

namespace Adapter\Classes;

use Adapter\Interfaces\LegacyLibraryInterface;

class LibraryAdapter implements LegacyLibraryInterface
{
    /**
     * @var NewLibrary
     */
    private $adapterObj;

    public function __construct()
    {
        $this->adapterObj = new NewLibrary();
    }

    public function findMedia($file)
    {
        return $this->adapterObj->getImage($file);
    }

    public function uploadMedia($file)
    {
        return $this->adapterObj->sendImage($file);
    }

    /**
     * У нового класса могут быть свои методы, чтобы не делать обертку для каждого, можно возвращать их
     * @param $name
     * @param $params
     * @return mixed
     * @throws \Exception
     */
    public function __call($name,$params)
    {
        if (method_exists($this->adapterObj,$name)){
            return call_user_func_array([$this->adapterObj,$name],$params);
        }else{
            throw new \Exception("{$name} - not exist");
        }
    }
}