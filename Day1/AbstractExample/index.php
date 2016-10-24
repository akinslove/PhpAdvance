<?php
/**
 * Created by PhpStorm.
 * User: TD11
 * Date: 24/10/2016
 * Time: 14:24
 */

//include_once("vehicle.class.php");
//
////create an instance of Vehicle
//$veh = new Vehicle();
//Uncomment above to throw error, An abstract class cannot be instantiated

include_once("car.class.php");

//create an instance of car
$cr = new Car();

//set the properties
$cr->setNumDoors(4);
$cr->setColour("Black");
$cr->setPrice(4500.00);

//call the drive method
$cr->drive();