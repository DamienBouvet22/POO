<?php


namespace App\Animals;


use App\Animal;

class ClownFish extends Animal
{
    private $noise = 'blou';
    const TYPE = 'poisson clown';

    protected function getNoise(): String
    {
        return $this->noise ;
    }
}