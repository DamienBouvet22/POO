<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanFly;

class Parrot extends Animal implements CanFly
{

    /**
     * @return String
     */
    protected function getNoise(): String
    {
        return "Coco";
    }

}