<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanSwim;

class ClownFish extends Animal implements CanSwim
{
    private $noise = 'blou';
    const TYPE = 'poisson clown';

    protected function getNoise(): String
    {
        return $this->noise ;
    }
}