<?php

namespace Creational\Builder;

use Creational\Builder\Models\Car;

interface CarBuilderInterface
{
    public function createCar();
    public function addBody();
    public function addDoors();
    public function addWheel();
    public function addEngine();
    public function getCar(): Car;
}
