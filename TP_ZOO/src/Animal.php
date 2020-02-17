<?php

namespace App;


abstract class Animal
{

    /**
     * @var String $name
     */
    private $name;

    /**
     * Animal constructor.
     *
     * @param String $name
     */
    public function __construct(String $name)
    {
        $this->name = $this->get_class_name($name);
    }

    private function get_class_name($classname)
    {
        if ($pos = strrpos($classname, '\\')) return substr($classname, $pos + 1);
        return $pos;
    }

    /**
     * @return String
     */
    abstract protected function getNoise() : String;

    /**
     * @return String
     */
    public function noise() : String
    {
        return $this->getNoise();
    }

    /**
     * @return String
     */
    public function getName(): String
    {
        return ($this->name);
    }

}

//namespace App;
//
//
//use App\Interfaces\CanFly;
//use App\Interfaces\CanSwim;
//use App\Interfaces\CanWalk;
//
//abstract class Animal implements CanSwim, CanFly, CanWalk
//{
//    /**
//     * @var String $name
//     */
//    private $name;
//    const TYPE = 'Animal non défini';
//
//    /**
//     * @return mixed
//     */
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    /**
//     * Animal constructor.
//     * @param String $name
//     */
//    public function __construct(String $name)
//    {
//        $this->name = $this->get_class_name($name);
//    }
//    private function get_class_name($classname)
//    {
//        if ($pos = strrpos($classname, '\\')) return substr($classname, $pos + 1);
//        return $pos;
//    }
//    abstract protected function getNoise() : String;
//
////    public function noise() {
////        return $this->getNoise();
////    }
//    public function presentation() {
//        echo 'Je m\'appelle ' . $this->name . ', je suis un ' . static :: TYPE . ' et je fais ' . $this->getNoise() . '<br><br>';
//
//        return $this;
//    }
//
//    public function sayHello() {
//        echo "Hello ";
//
//        return $this;
//    }
//
//    public function name() {
//      return $this->getName();
//   }
