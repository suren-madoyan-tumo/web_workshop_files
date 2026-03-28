<?php 

	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = 'ashot@email.com';

		if ($username != 'John') {
			echo 'Username is incorrect!';
		} else {
			if ($password != '123456') {
				echo 'Password is incorrect!';
				if ($email != 'john@email.com') {
					echo 'Email is incorrect!';
				} else {
					echo 'Password is sent to your email';
				}
			} else{
				echo 'Welcome to the Site!';
			}
		}
	}

	if (isset($_POST['register'])) {
		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
	}
 ?>