<?php

	include('config/dbConfig.php');
	include('functions/loginFunctions.php');
	include('functions/sessionFunctions.php');


	$user = login($conection, $_POST['userEmail'], $_POST['userPassword']);

	if($user == null) {

		header("Location: index.php?login=0");

	} else {
		
		conectUser($user['userEmail']);
		
		header("Location: index.php?login=1");

	}

	die();