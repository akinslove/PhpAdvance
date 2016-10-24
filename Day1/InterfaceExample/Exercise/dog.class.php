<?php

/**
 * Created by PhpStorm.
 * User: TD11
 * Date: 24/10/2016
 * Time: 12:51
 */

include_once("animal.class.php");

class Dog extends Animal
{

    public function speaks() {

        echo "<p>I am a dog and my name is $this->name</p>";

        parent::speaks();
    }

}