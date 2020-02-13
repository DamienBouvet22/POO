<?php


namespace App\Animals;


use App\Animal;

class Parrot extends Animal
{
    private $noise = 'coco';
    const TYPE = 'perroquet';

    protected function getNoise(): String
    {
        return $this->noise ;
    }
}