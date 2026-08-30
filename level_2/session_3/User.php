<?php

class User {

    public $name;
    public $surname;
    public $email;
    public $password;


    function __construct($name, $surname, $email, $password){

        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;

    }

    public static function register(){

    }

    public static function login(){

    }


    public static function update(){

    }

    public static function delete(){

    }

}


?>