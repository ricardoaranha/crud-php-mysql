<?php

require_once('config/dbConfig.php');

function login($conection, $email, $password) {

	$password = mysqli_real_escape_string($conection, $password);

	$password = md5($password);

	$email = mysqli_real_escape_string($conection, $email);

	$query = mysqli_query($conection, 
			"select * from tblusers 
				where userEmail = '{$email}' 
				and userPassword = '{$password}'");

	$result = mysqli_fetch_assoc($query);

	return $result;

}