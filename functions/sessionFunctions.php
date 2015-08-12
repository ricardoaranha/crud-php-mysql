<?php

	session_start();

	function userIsLogged() {

		return isset($_SESSION['loggedUser']);

	}

	function verifyUser() {

		if(!userIsLogged()) {

			header("Location: index.php?securityFailure=true");

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

	}