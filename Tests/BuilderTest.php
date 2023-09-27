<?php

namespace Test;

use Creational\Builder\BenzCarBuilder;
use Creational\Builder\BMWCarBuilder;
use Creational\Builder\CarProducer;
use Creational\Builder\Models\BenzCar;
use Creational\Builder\Models\BMWCar;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{

    public function testProduceBmwCar()
    {
        $builder = new BMWCarBuilder();
        $carProducer = new CarProducer($builder);
        $myCar = $carProducer->produceCar();
        // test
        return $this->assertInstanceOf(BMWCar::class, $myCar);
    }

    public function testProduceBenzCar()
    {
        $builder = new BenzCarBuilder();
        $carProducer = new CarProducer($builder);
        $myCar = $carProducer->produceCar();
        // test
        return $this->assertInstanceOf(BenzCar::class, $myCar);
    }

}
