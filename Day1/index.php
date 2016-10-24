<?php
/**
 * Created by PhpStorm.
 * User: TD11
 * Date: 24/10/2016
 * Time: 11:18
 */

include_once("vehicle.class.php");

//create an instance of vehicle
$veh = new Vehicle();

//set the properties
$veh->colour = "Black";
$veh->setPrice(7000);

//call the drive method
$veh->drive();

echo "<br />";

//create another instance of vehicle
$veh2 = new Vehicle();

//set the colour
$veh2->colour = "Blue";

//call the drive method
$veh2->drive();

//display how many objects were created
echo "<p>Object created is " . Vehicle::$vehicleObjectCreated . "</p>";