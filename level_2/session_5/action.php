<?php

include('User.php');

if(isset($_POST['register'])){
	
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	User::register($name, $surname, $email, $password);

}

if(isset($_POST['login'])){
	
	$email = $_POST['email'];
	$password = $_POST['password'];

	$user = User::login($email, $password);

	var_dump($user);
}