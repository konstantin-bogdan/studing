<?php

	$mysqli = new mysqli ("localhost", "root", "", "test_base");
	$mysqli->query("SET NAMES 'utf8'");

	$hash 	= sha1('do;lkasd&(dsa>213_asd');
	$login 	= 'user_login';
	$email 	= 'some_email@test.com';

	$query 	= 'INSERT 
			INTO `users` (`login`, `password`, `email`) 
			VALUES ("' . $login . '", "' . $hash . '", "' . $email . '")';

	$success = $mysqli->query($query);

	var_dump($hash);
	echo $success;

	$mysqli->close();


?>

