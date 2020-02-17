<?php

namespace App;
class Enclosure
{

    /**
     * @var Animal[] $animals
     */
    public $animals;

    /**
     * @param Animal $animal
     */
    public function addAnimal(Animal $animal) : void
    {
        $this->animals[] = $animal;
    }

    /**
     * @return String
     */
    public function __toString() : String
    {
        foreach ($this->animals as $animal) {
            echo $animal->getName() . ' ' . $animal->noise() . '<br>';
        }

        return '';
    }

}

//use App\Animals\Fish;
//use App\Interfaces\CanFly;
//use App\Interfaces\CanSwim;
//
//class Enclosure
//{
//    /**
//     * @var Animal[] $animals
//     */
//    private $animals = array();
//
//    /**
//     * @param Animal $animal
//     */
//    public function addAnimal(Animal $animal)
//    {
//        $this->animals[] = $animal;
//    }
//
//    /**
//     * @return string
//     */
//    public function __toString()
//    {
//        foreach ($this->animals as $animal){
//
//        }
//        return $this->animals;
//    }
//}