<?php


namespace App;


use App\Animals\Fish;
use App\Interfaces\CanFly;
use App\Interfaces\CanSwim;

class Enclosure
{
    /**
     * @var Animal[] $animals
     */
    private $animals = array();

    /**
     * @param Animal $animal
     */
    public function addAnimal(Animal $animal)
    {
        $this->animals[] = $animal;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        foreach ($this->animals as $animal){

        }
        return $this->animals;
    }
}