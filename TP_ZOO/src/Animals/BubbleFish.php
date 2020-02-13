<?php


namespace App\Animals;


use App\Animal;

class BubbleFish extends Animal
{
    private $noise = 'bloubloubloubloubloubloublou';
    const TYPE = 'poisson bulle';

    protected function getNoise(): String
    {
        return $this->noise ;
    }
}