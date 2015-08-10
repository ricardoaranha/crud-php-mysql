<?php

	include('config/dbConfig.php');
	include('functions/loginFunctions.php');

	$user = login($conection, $_POST['userEmail'], $_POST['userPassword']);

	if($user == null) {

		header("Location: index.php?login=0");

	} else {

		setcookie("loggedUser", $user['userEmail']);

		header("Location: index.php?login=1");

	}

	die();