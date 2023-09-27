<?php

namespace Creational\Builder;

use Creational\Builder\Models\BMWCar;
use Creational\Builder\Models\Car;

class BMWCarBuilder implements CarBuilderInterface
{
    private $type;

    /** 
     * @var Car $car
     */
    public function createCar()
    {
        $this->type = new BMWCar();
    }

    public function addBody()
    {
        $this->type->setPart('body', 'BMW-Body');
    }

    public function addDoors()
    {
        $this->type->setPart('doors', 'BMW-Doors');
    }

    public function addWheel()
    {
        $this->type->setPart('wheel', 'BMW-Wheel');
    }

    public function addEngine()
    {
        $this->type->setPart('engine', 'BMW-Engine');
    }

    public function getCar(): Car
    {
        return $this->type;
    }
}
