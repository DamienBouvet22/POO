<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanFly;
use App\Interfaces\CanWalk;

class Dove extends Animal implements CanFly
{
    private $noise = 'Rou Rouuu';
    const TYPE = 'colombe';

    protected function getNoise(): String
    {
        return $this->noise ;
    }
}