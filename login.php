<?php

	include('config/dbConfig.php');
	include('functions/loginFunctions.php');
	include('functions/sessionFunctions.php');


	$user = login($conection, $_POST['userEmail'], $_POST['userPassword']);

	if($user == null) {

		$_SESSION['danger'] = "Email or password invalid, please try again!";

		header("Location: index.php");

	} else {
		
		conectUser($user['userEmail']);

		$_SESSION['success'] = "Logged with success!";
		
		header("Location: index.php");

	}

	die();