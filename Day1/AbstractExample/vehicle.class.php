<?php

/**
 * Created by PhpStorm.
 * User: TD11
 * Date: 24/10/2016
 * Time: 14:23
 */

//an abstract class is a class with the keyword abstract as below
//an abstract class cannot be instantiated because it can contain an optional abstract method
abstract class Vehicle
{

    private $colour;
    private $price;
    private $num_doors;

    /**
     * @return mixed
     */
    public function getColour()
    {
        return $this->colour;
    }

    /**
     * @param mixed $colour
     */
    public function setColour($colour)
    {
        $this->colour = $colour;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getNumDoors()
    {
        return $this->num_doors;
    }

    /**
     * @param mixed $num_doors
     */
    public function setNumDoors($num_doors)
    {
        $this->num_doors = $num_doors;
    }

    //the drive method below is an abstract method
    public abstract function drive();

}