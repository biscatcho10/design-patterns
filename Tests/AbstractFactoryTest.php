<?php

namespace Test;

use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{

    public function testCanCreateBMWCar()
    {
        $carFactory = new CarAbstractFactory(200000);
        $myCar = $carFactory->createBMWCar();

        $this->assertInstanceOf(BMWCar::class, $myCar, "car is not bmw.");
    }

    public function testCanCreateBenzCar()
    {
        $carFactory = new CarAbstractFactory(200000);
        $myCar = $carFactory->createBenzCar();

        // $this->assertInstanceOf(BMWCar::class, $myCar, "car is not benz.");
        $this->assertInstanceOf(BenzCar::class, $myCar, "car is not benz.");
    }

}