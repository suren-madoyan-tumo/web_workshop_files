<?php

include('User.php');
include('Product.php');

if(isset($_POST['register'])){
	
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	User::register($name, $surname, $email, $password);

}

if(isset($_POST['update_user'])){
	
	$id = $_POST['id'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	User::update($id, $name, $surname, $email, $password);
}

if(isset($_POST['add_product'])){

	Product::create(
		$_POST['title'],
		$_POST['image'],
		$_POST['text'],
		$_POST['page'],
		$_POST['language'],
		$_POST['category'],
		$_POST['author'],
		$_POST['year'],
		$_POST['price']
	);

}

if(isset($_POST['login'])){
	
	$email = $_POST['email'];
	$password = $_POST['password'];

	$user = User::login($email, $password);

	var_dump($user);
}

if(isset($_GET['action']) && $_GET['action']=='delete' && isset($_GET['id'])) {
  User::delete($_GET['id']);
}