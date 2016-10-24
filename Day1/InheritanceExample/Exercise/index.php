<?php
/**
 * Created by PhpStorm.
 * User: TD11
 * Date: 24/10/2016
 * Time: 12:54
 */

include_once("dog.class.php");
include_once("cat.class.php");
include_once("animal.class.php");

//create instance of Animal
$anim = new Animal();

//set the property
$anim->setName("Damin");

//call the speak method
$anim->speaks();

echo "<br/>";

//create instance of Dog
$dg = new Dog();

//set the property
$dg->setName("Bingo");

//call the speak method
$dg->speaks();

echo "<br/>";

//create instance of Cat
$ct = new Cat();

//set the property
$ct->setName("Whiskey");

//call the speak method
$ct->speaks();