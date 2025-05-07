<?php

class Alien extends Species
{
    private string $spaceship_name;
    private string $laser_name;

    /**
     * Alien constructor.
     * @param $species_name
     * @param $species_age
     * @param $spaceship_name
     * @param $laser_name
     */
    public function __construct($species_name, $species_age, $spaceship_name, $laser_name)
    {
        // BEGIN EXERCISE 7b
        parent::__construct($species_name, $species_age);
        $this->spaceship_name = $spaceship_name;
        $this->laser_name = $laser_name;
    }

    /**
     * @return string
     */
    public function getSpaceshipName()
    {
        return $this->spaceship_name;
    }

    public function getLaserName(){
        return $this->laser_name;
    }

    /**
     * @param mixed $spaceship_name
     */
    public function setSpaceshipName($spaceship_name)
    {
        $this->spaceship_name = $spaceship_name;
    }

    /**
     * Concrete implementation of the jump class from the Species parent class.
     * This makes the alien to a BIG alien jump.
     */
    public function jump() {
        echo $this->getName() . " has just done a BIG alien jump! <br>";
    }

    /**
     * Fires a laser X amount of times where X is the number passed in which indicates how many times the laser fires.
     * @param $num Number of times the laser will fire.
     */
    public function fireLaser($num) {
        echo $this->getName() . " just fired their super laser called " . $this->laser_name . " " . $num . " times! Pew Pew.<br>";
    }

    /**
     * Makes the alien fly away in their space ship.
     */
    public function flySpaceship() {
        echo "Zoom zoom. " . $this->getName() . " just flew away in their space ship called " . $this->spaceship_name . "<br>";
    }
}