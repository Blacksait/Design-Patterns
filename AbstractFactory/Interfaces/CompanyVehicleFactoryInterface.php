<?php

namespace AbstractFactory\Interfaces;

interface CompanyVehicleFactoryInterface
{
    public function getCar():CarInterface;
    public function getMotorbike():MotorbikeInterface;
}