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
                header("Location: index.php");
            }
        mysqli_close($db);
        }

    }

    public static function login($email, $password){

        $db = mysqli_connect('localhost', 'root', 'root', 'nameSurname');
        
        if (!$db){
            echo 'db error';
        }else{
            $query = "SELECT * FROM `users` WHERE `email`= '$email' AND `password` ='$password'";

            $response = mysqli_query($db, $query);
            if(!$response){
                echo 'query error';
            }else{
                $user = mysqli_fetch_assoc($response);
                header("Location: ../myaccount.php?id=".$user['id']);
            }
        mysqli_close($db);
        }
    }

    public static function readAll(){
        $db = mysqli_connect('localhost', 'root', 'root', 'nameSurname');
        
        if (!$db){
            echo 'db error';
        }else{
            $query = "SELECT * FROM `users`";

            $response = mysqli_query($db, $query);
            if(!$response){
                echo 'query error';
            }else{
                return mysqli_fetch_all($response, MYSQLI_ASSOC);
            }
        mysqli_close($db);
        }
    }

    public static function readOne($id){
        $db = mysqli_connect('localhost', 'root', 'root', 'nameSurname');
        
        if (!$db){
            echo 'db error';
        }else{
            $query = "SELECT * FROM `users` WHERE `id` = $id";

            $response = mysqli_query($db, $query);
            if(!$response){
                echo 'query error';
            }else{
                return mysqli_fetch_assoc($response);
            }
        mysqli_close($db);
        }
    }

    public static function update($id, $name, $surname, $email, $password){
        $db = mysqli_connect('localhost', 'root', 'root', 'nameSurname');
        if (!$db){
            echo 'db error';
        }else{
            $query = "UPDATE `users` SET
            `name`= '$name',
            `surname`= '$surname',
            `email`= '$email',
            `password`= '$password'
            WHERE `id`=$id ";
            
            $response = mysqli_query($db, $query);

            if(!$response){
                echo 'query error';
            }else{
                header("Location: index.php");
            }
           mysqli_close($db);
        }
    }


    public static function delete($id){
        $db = mysqli_connect('localhost', 'root', 'root', 'nameSurname');
        
        if (!$db){
            echo 'db error';
        }else{
            $query = "DELETE FROM `users` WHERE `id` = $id";

            $response = mysqli_query($db, $query);
            if(!$response){
                echo 'query error';
            }else{
                header("Location: index.php");
            }
        mysqli_close($db);
        }
    }

}


?>