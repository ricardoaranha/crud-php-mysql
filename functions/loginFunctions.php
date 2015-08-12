<?php

	function login($conection, $email, $password) {

		$password = md5($password);

		$query = mysqli_query($conection, 
				"select * from tblusers 
					where userEmail = '{$email}' 
					and userPassword = '{$password}'");

		$result = mysqli_fetch_assoc($query);

		return $result;

	}