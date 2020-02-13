<?php


namespace App\Animals;


use App\Animal;

class Elephant extends Animal
{
    private $noise = 'toooooout';
    const TYPE = 'Élephant';

    protected function getNoise(): String
    {
        return $this->noise ;
    }
}