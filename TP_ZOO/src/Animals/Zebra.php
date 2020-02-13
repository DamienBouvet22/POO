<?php


namespace App\Animals;


use App\Animal;

class Zebra extends Animal
{
    private $noise = 'hiiii';
    const TYPE = 'Zèbre';

    protected function getNoise(): String
    {
        return $this->noise ;
    }
}