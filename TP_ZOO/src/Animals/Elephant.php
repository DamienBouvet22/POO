<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanWalk;

class Elephant extends Animal implements CanWalk
{
    private $noise = 'toooooout';
    const TYPE = 'Élephant';

    protected function getNoise(): String
    {
        return $this->noise ;
    }
}