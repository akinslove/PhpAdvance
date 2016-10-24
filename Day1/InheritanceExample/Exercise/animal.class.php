<?php

/**
 * Created by PhpStorm.
 * User: TD11
 * Date: 24/10/2016
 * Time: 12:51
 */
//final class Animal

//final keyword in class makes it impossible to inherit the class
class Animal
{

    protected $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

//    public final function speaks() {
//Final keyword on a method makes it impposible to override the method
    public function speaks() {

        echo "<p>I am an animal</p>";

        echo "<p>My name is $this->name</p>";
    }


}