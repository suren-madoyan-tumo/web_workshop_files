<?php
include('User.php');

$new_user = new User(
	$_POST['name'],
	$_POST['surname'],
	$_POST['email'],
	$_POST['password']
);

echo'<pre>';
print_r($new_user);
echo'</pre>';