<?php

class Product {

    public $title;
    public $image;
    public $text;
    public $page;
    public $language;
    public $category;
    public $author;
    public $year;
    public $price;



    function __construct($title, $image, $text, $page, $language, $category, $author, $year, $price){

        $this->title = $title;
        $this->image = $image;
        $this->text = $text;
        $this->page = $page;
        $this->language = $language;
        $this->category = $category;
        $this->author = $author;
        $this->year = $year;
        $this->price = $price;

    }

    public static function create($title, $image, $text, $page, $language, $category, $author, $year, $price){
        $db = mysqli_connect('localhost', 'root', 'root', 'nameSurname');
        if (!$db){
            echo 'db error';
        }else{
            $query = "INSERT INTO `products`(`title`, `image`, `text`, `page`, `language`, `category`, `author`, `year`, `price` ) VALUES ('$title', '$image', '$text', $page, '$language', '$category', '$author', $year, $price)";
            $response = mysqli_query($db, $query);

            if(!$response){
                echo 'query error';
            }else{
                echo 'success';
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
                return mysqli_fetch_assoc($response);
            }
        mysqli_close($db);
        }
    }


    public static function readAll(){
        $db = mysqli_connect('localhost', 'root', 'root', 'nameSurname');
        
        if (!$db){
            echo 'db error';
        }else{
            $query = "SELECT * FROM `products`";

            $response = mysqli_query($db, $query);
            if(!$response){
                echo 'query error';
            }else{
                return mysqli_fetch_all($response, MYSQLI_ASSOC);
            }
        mysqli_close($db);
        }
    }

    public static function update(){

    }

    public static function delete(){

    }

}


?>