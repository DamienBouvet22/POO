<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanSwim;

class CatFish extends Animal implements CanSwim
{
    private $noise = 'bloublou';
    const TYPE = 'poisson chat';

    protected function getNoise(): String
    {
        return $this->noise ;
    }
}