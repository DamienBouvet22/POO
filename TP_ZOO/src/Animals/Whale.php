<?php


namespace App\Animals;


use App\Animal;

class Whale extends Animal
{
    private $noise = 'splash';
    const TYPE = 'baleine';

    protected function getNoise(): String
    {
        return $this->noise ;
    }
}