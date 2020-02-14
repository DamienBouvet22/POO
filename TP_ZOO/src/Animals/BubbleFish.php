<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanSwim;

class BubbleFish extends Animal implements CanSwim
{
    private $noise = 'bloubloubloubloubloubloublou';
    const TYPE = 'poisson bulle';

    protected function getNoise(): String
    {
        return $this->noise ;
    }
}