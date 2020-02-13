<?php


namespace App\Animals;


use App\Animal;

class Fish extends Animal
{
    private $noise = 'bloubloublou';
    const TYPE = 'poisson';

    protected function getNoise(): String
    {
        return $this->noise ;
    }
}