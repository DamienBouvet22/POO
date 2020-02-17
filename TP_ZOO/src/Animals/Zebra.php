<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanWalk;

class Zebra extends Animal implements CanWalk
{

    /**
     * @return String
     */
    protected function getNoise(): String
    {
        return "hiiiii";
    }

}