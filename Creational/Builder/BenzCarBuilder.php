<?php

namespace Creational\Builder;

use Creational\Builder\Models\BenzCar;
use Creational\Builder\Models\Car;

class BenzCarBuilder implements CarBuilderInterface
{
    private $type;

    /** 
     * @var Car $car
     */
    public function createCar()
    {
        $this->type = new BenzCar();
    }

    public function addBody()
    {
        $this->type->setPart('body', 'Benz-Body');
    }

    public function addDoors()
    {
        $this->type->setPart('doors', 'Benz-Doors');
    }

    public function addWheel()
    {
        $this->type->setPart('wheel', 'Benz-Wheel');
    }

    public function addEngine()
    {
        $this->type->setPart('engine', 'Benz-Engine');
    }

    public function getCar(): Car
    {
        return $this->type;
    }
}
