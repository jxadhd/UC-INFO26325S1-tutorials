<?php
class Credentials {

    private $username;
    private $password;

    function __construct($user, $pass) {
        $this->username = $user;
        $this->password = $pass;
    }

    public function validate($user, $pass) {
        return $this->username == $user && $this->password == $pass;
    }
}