<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanSwim;

class Whale extends Animal implements CanSwim
{
    private $noise = 'splash';
    const TYPE = 'baleine';

    protected function getNoise(): String
    {
        return $this->noise ;
    }
}