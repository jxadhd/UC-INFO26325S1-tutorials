<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 29/07/18
 * Time: 10:49 PM
 */

// EXERCISE 7a
include "Species.php";
class Person extends Species
{
    private $favourite_colour;

    /**
     * Person constructor.
     * @param $person_name
     * @param $person_age
     * @param $person_colour
     */
    public function __construct($person_name, $person_age, $person_colour)
    {
        $this->favourite_colour = $person_colour;
        parent::__construct($person_name, $person_age);
    }

    /**
     * Gets the age of the current person
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Gets the name of the current person
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Gets the favourite colour of the current person
     * @return mixed
     */
    public function getFavouriteColour()
    {
        return $this->favourite_colour;
    }

    /**
     * Sets the name of the current person to the passed in name.
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Sets the age of the current person to the passed in age.
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * Sets the favourite colour of the current person to the passed in colour.
     * @param mixed $favourite_colour
     */
    public function setFavouriteColour($favourite_colour)
    {
        $this->favourite_colour = $favourite_colour;
    }

    /**
     * Makes the person eat the specified food which is passed in to this function.
     * @param $food_name
     */
    public function eatFood($food_name) {
        echo $this->getName() . " just ate a very tasty " . $food_name;
    }

    /**
     * Concrete implementation of the jump method from the Species parent class.
     */
    public function jump() {
        echo $this->getName() . " has done a measly human jump :( <br>";
    }
}