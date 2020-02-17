<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanSwim;
use App\Interfaces\CanWalk;

class Elephant extends Animal implements CanWalk, CanSwim
{

    /**
     * @return String
     */
    protected function getNoise(): String
    {
        return "Tooooout";
    }

}