<?php


namespace App\Animals;


use App\Animal;

class Dove extends Animal
{
    private $noise = 'Rou Rouuu';
    const TYPE = 'colombe';

    protected function getNoise(): String
    {
        return $this->noise ;
    }
}