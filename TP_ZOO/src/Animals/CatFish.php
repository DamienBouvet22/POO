<?php


namespace App\Animals;


use App\Animal;

class CatFish extends Animal
{
    private $noise = 'bloublou';
    const TYPE = 'poisson chat';

    protected function getNoise(): String
    {
        return $this->noise ;
    }
}