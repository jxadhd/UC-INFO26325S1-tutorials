<?php
abstract class Individual {
    const IDEALISED_LIFE_SPAN = 100;
    public static $current_life_expectancy = 73.4;

    private $first_name;
    private $middle_name;
    private $last_name;
    private $dob;

    public function __construct($first_name, $middle_name, $last_name, $dob) {
        $this->first_name = $first_name;
        $this->middle_name = $middle_name;
        $this->last_name = $last_name;
        $this->dob = strtotime($dob);
    }

    public function getDOB() {
        return $this->dob;
    }

    public function getFullName() {
        return $this->last_name.', '.$this->first_name.' '.$this->middle_name;
    }
}

class Employee extends Individual {
    private $employee_id;
    private $date_employed;

    public function __construct($first_name, $middle_name, $last_name, $dob, $employee_id) {
        parent::__construct($first_name, $middle_name, $last_name, $dob);
        $this->employee_id = $employee_id;
    }

    public function setDateEmployed($d) {
        date_default_timezone_set('Pacific/Auckland');
        $this->date_employed = strtotime($d);
    }

    public function getYearsEmployed() {
        $seconds_in_yr = 365 * 24 * 60 * 60;
        $elapsed = time() - $this->date_employed;
        return $elapsed / $seconds_in_yr;
    }
}
?>