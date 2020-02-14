<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanFly;

class Parrot extends Animal implements CanFly
{
    private $noise = 'coco';
    const TYPE = 'perroquet';

    protected function getNoise(): String
    {
        return $this->noise ;
    }
}