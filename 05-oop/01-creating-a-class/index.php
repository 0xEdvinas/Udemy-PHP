<?php

class User {
    public $name;
    public $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function login() {
        echo $this->name . " has logged in.";
    }
}

// Instanciate a new obj
$user = new User("John Doe", "test@gmail.com");

$user->login();

$user->name = "Jane dough";

var_dump($user);