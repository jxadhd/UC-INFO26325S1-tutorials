<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 29/07/18
 * Time: 11:07 PM
 */
abstract class Species
{
    protected $name;
    protected $age;

    public function __construct($species_name, $species_age)
    {
        $this->name = $species_name;
        $this->age = $species_age;
    }

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

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * Abstract function which tells us all species can jump.
     */
    abstract protected function jump();


}