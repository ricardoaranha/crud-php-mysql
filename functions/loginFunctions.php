<?php

require_once('config/dbConfig.php');

function login($connection, $email, $password) {

	$password = mysqli_real_escape_string($connection, $password);

	$password = md5($password);

	$email = mysqli_real_escape_string($connection, $email);

	$query = mysqli_query($connection, 
			"select * from tblusers 
				where userEmail = '{$email}' 
				and userPassword = '{$password}'");

	$result = mysqli_fetch_assoc($query);

	return $result;

}