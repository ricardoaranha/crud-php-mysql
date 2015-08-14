<?php

session_start();

function userIsLogged() {

	return isset($_SESSION['loggedUser']);

}

function verifyUser() {

	if(!userIsLogged()) {

		$_SESSION['danger'] = "You don't have access, please log in.";

		header("Location: index.php");

		die();

	}

}

function loggedUser() {

	return $_SESSION['loggedUser'];

}

function conectUser($email) {

	$_SESSION['loggedUser'] = $email;

}

function logout() {

	session_destroy();

	session_start();

}