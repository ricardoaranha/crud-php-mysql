<?php

	include('config/dbConfig.php');
	include('functions/loginFunctions.php');

	$user = searchUser($conection, $_POST['userEmail'], $_POST['userPassword']);

	if($user == null) {
		header("Location: index.php?login=0");
	} else {
		header("Location: index.php?login=1");
	}

	die();