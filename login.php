<?php

	require_once('functions/loginFunctions.php');
	require_once('functions/sessionFunctions.php');


	$user = login($connection, $_POST['userEmail'], $_POST['userPassword']);

	if($user == null) {

		$_SESSION['danger'] = "Email or password invalid, please try again!";

		header("Location: index.php");

	} else {
		
		conectUser($user['userEmail']);

		$_SESSION['success'] = "Logged with success!";
		
		header("Location: index.php");

	}

	die();