<?php

/**
 * Created by PhpStorm.
 * User: TD11
 * Date: 24/10/2016
 * Time: 14:29
 */

include_once("vehicle.class.php");

class Car extends Vehicle
{

    public function drive()
    {
        echo "<p>This is a car with " . $this->getNumDoors() . " door(s) and colour is " .
            $this->getColour() . " and price is £" . $this->getPrice() . "</p>";
    }

}