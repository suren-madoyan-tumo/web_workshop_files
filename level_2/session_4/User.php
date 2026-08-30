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

    public static function register($name, $surname, $email, $password){

        $db = mysqli_connect('localhost', 'root', 'root', 'nameSurname');
        
        if (!$db){
            echo 'db error';
        }else{
            $query = "INSERT INTO `users` (`name`, `surname`, `email`, `password`) VALUES ('$name', '$surname', '$email', '$password')";

            $response = mysqli_query($db, $query);
            if(!$response){
                echo 'query error';
            }else{
                echo 'success';
            }
        mysqli_close($db);
        }

    }

    public static function login(){

    }


    public static function update(){

    }

    public static function delete(){

    }

}


?>