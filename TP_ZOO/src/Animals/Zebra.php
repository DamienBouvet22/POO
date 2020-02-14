<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanWalk;

class Zebra extends Animal implements CanWalk
{
    private $noise = 'hiiii';
    const TYPE = 'Zèbre';

    protected function getNoise(): String
    {
        return $this->noise ;
    }
}