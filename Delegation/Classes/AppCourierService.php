<?php

namespace Delegation\Classes;

use Delegation\Classes\TrainCourierService;
use Delegation\Interfaces\CourierServiceInterface;
use Delegation\Classes\CarCourierService;

class AppCourierService implements CourierServiceInterface
{
    private $courierService;

    public function __construct()
    {
        $this->courierService = new CarCourierService();
    }

    public function TrainDelivery(){
        $this->courierService = new TrainCourierService();
    }

    public function CarDelivery(){
        $this->courierService = new CarCourierService();
    }

    public function setSender($value)
    {
        $this->courierService->setSender($value);
    }

    public function setRecipient($value)
    {
        $this->courierService->setRecipient($value);
    }

    public function deliver()
    {
        $courierService = get_class($this->courierService);
        echo "Доставляет: {$courierService}".PHP_EOL;
        $this->courierService->deliver();
    }
}