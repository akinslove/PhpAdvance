<?php

/**
 * Created by PhpStorm.
 * User: TD11
 * Date: 24/10/2016
 * Time: 12:04
 */

include_once("vehicle.class.php");

class Car extends Vehicle
{

    private $num_doors;

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



    public function drive()
    {
        echo "<p>This is a car with $this->num_doors door(s) </p>";

//        echo "<p>Vehicle is driving with colour " . $this->colour . "</p>";
//        echo "<p>The price of the vehicle is " . $this->price . "</p>";

        parent::drive();
    }

}