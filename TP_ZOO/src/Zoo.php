<?php


namespace App;


class Zoo
{
    /**
     * @var Enclosure $aquarium
     */
    private static $aquarium = null;

    /**
     * @var Enclosure $aviary
     */
    private static  $aviary = null;

    /**
     * @var Enclosure $fence
     */
    private static  $fence = null;



    /**
     * @return Enclosure
     */
    public static function getAquarium(): Enclosure
    {
        return self::$aquarium;
    }

    /**
     * @return Enclosure
     */
    public static function getAviary(): Enclosure
    {
        return self::$aviary;
    }

    /**
     * @return Enclosure
     */
    public static function getFence(): Enclosure
    {
        return self::$fence;
    }


}