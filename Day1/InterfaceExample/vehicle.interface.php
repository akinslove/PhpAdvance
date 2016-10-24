<?php

/**
 * Created by PhpStorm.
 * User: TD11
 * Date: 24/10/2016
 * Time: 15:15
 */
interface IVehicle
{

//    private $colour; //not allowed

//    public function drive()
//    {
//
//    } //not allowed

    //an interface method cannot be public and abstract because all interface methods are public and abstract
//    public abstract function getColour();

    function getColour();
    function setColour($colour);

    function getPrice();
    function setPrice($price);

    function getNumDoors();
    function setNumDoors($num_doors);

    function drive();
}