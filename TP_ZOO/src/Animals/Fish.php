<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanSwim;

class Fish extends Animal implements CanSwim
{
    private $noise = 'bloubloublou';
    const TYPE = 'poisson';

    protected function getNoise(): String
    {
        return $this->noise ;
    }
}