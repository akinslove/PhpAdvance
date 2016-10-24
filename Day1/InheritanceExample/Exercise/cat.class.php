<?php

/**
 * Created by PhpStorm.
 * User: TD11
 * Date: 24/10/2016
 * Time: 12:51
 */

include_once("animal.class.php");

class Cat extends Animal
{

    //override
    public function speaks() {

        echo "<p>I am a cat</p>";

        parent::speaks();//call the parent speak method
    }

}