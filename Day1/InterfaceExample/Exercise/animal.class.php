<?php

/**
 * Created by PhpStorm.
 * User: TD11
 * Date: 24/10/2016
 * Time: 12:51
 */

include_once("animal.interface.php");

abstract class Animal implements IAnimal
{

    protected $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

//    public abstract function speaks();

}