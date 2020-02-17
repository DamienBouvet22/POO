<?php


namespace App;

use App\Interfaces\CanSwim;
use App\Interfaces\CanWalk;

class Zoo
{

    /**
     * @var Enclosure|null $aquarium
     */
    private static $aquarium = null;

    /**
     * @var Enclosure|null $fence
     */
    private static $fence = null;

    /**
     * @return Enclosure|null
     */
    public static function getAquarium()
    {
        return self::$aquarium;
    }

    /**
     * @return Enclosure|null
     */
    public static function getFence()
    {
        return self::$fence;
    }

    /**
     * @param Animal $animal
     */
    public static function addAnimal(Animal $animal) : void
    {
        if (self::getAquarium() === null) {
            self::$aquarium = new Enclosure();
        }

        if (self::getFence() === null) {
            self::$fence = new Enclosure();
        }

        if ($animal instanceof CanSwim) {
            self::$aquarium->addAnimal($animal);
        }

        if ($animal instanceof CanWalk) {
            self::$fence->addAnimal($animal);
        }
    }

    public static function visitTheZoo()
    {
        echo '<h1 style=" text-align: center">Bienvenue au ZOO </h1><br><br><h2>Aquarium</h2><br>';
        echo self::getAquarium().'<br><br>';
        echo '<h2>Cage</h2><br>';
        echo self::getFence();
    }

}

//
//class Zoo
//{
//    /**
//     * @var Enclosure $aquarium
//     */
//    private static $aquarium = null;
//
//    /**
//     * @var Enclosure $aviary
//     */
//    private static  $aviary = null;
//
//    /**
//     * @var Enclosure $fence
//     */
//    private static  $fence = null;
//
//
//
//    /**
//     * @return Enclosure
//     */
//    public static function getAquarium(): Enclosure
//    {
//        return self::$aquarium;
//    }
//
//    /**
//     * @return Enclosure
//     */
//    public static function getAviary(): Enclosure
//    {
//        return self::$aviary;
//    }
//
//    /**
//     * @return Enclosure
//     */
//    public static function getFence(): Enclosure
//    {
//        return self::$fence;
//    }
//
//    public static function addAnimal()
//    {
//
//    }
//
//
//}