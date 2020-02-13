<?php


namespace App;


abstract class Animal
{
    private $name;
    const TYPE = 'Animal non défini';

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Animal constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract protected function getNoise() : String;

//    public function noise() {
//        return $this->getNoise();
//    }
    public function presentation() {
        echo 'Je m\'appelle ' . $this->name . ', je suis un(e) ' . static :: TYPE . ' et je fais ' . $this->getNoise() . '<br><br>';

        return $this;
    }

    public function sayHello() {
        echo "Hello ";

        return $this;
    }

//    public function name() {
//        return $this->getName();
//    }

}