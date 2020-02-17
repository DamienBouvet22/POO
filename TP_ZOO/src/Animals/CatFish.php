<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanSwim;

class CatFish extends Animal implements CanSwim
{

    /**
     * @return String
     */
    protected function getNoise(): String
    {
        return "bloublouMiaou";
    }

}