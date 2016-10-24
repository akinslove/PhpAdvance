<?php

/**
 * Created by PhpStorm.
 * User: TD11
 * Date: 24/10/2016
 * Time: 11:16
 */
class Vehicle
{

    public static $vehicleObjectCreated = 0;

    public $colour = "Red";

    private $price = 2000;

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

//    public function Vehicle()
//    {
//        echo "<p>This is a constructor with Vehicle</p>";
//    }

    public function __construct()
    {
        echo "<p>This is a constructor with __construct</p>";

        self::$vehicleObjectCreated++;
    }

    public function drive()
    {
        echo "<p>Vehicle is driving with colour " . $this->colour . "</p>";
        echo "<p>The price of the vehicle is " . $this->price . "</p>";
    }

    public function __destruct()
    {
        echo "<p>This is a destructor with __destruct</p>";
    }
}