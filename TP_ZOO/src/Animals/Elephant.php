<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanWalk;

class Elephant extends Animal implements CanWalk
{

    /**
     * @return String
     */
    protected function getNoise(): String
    {
        return "Tooooout";
    }

}