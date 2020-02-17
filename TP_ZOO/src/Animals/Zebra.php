<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanSwim;
use App\Interfaces\CanWalk;

class Zebra extends Animal implements CanWalk, CanSwim
{

    /**
     * @return String
     */
    protected function getNoise(): String
    {
        return "hiiiii";
    }

}