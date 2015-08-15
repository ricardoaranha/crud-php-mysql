<?php

	require_once('functions/sessionFunctions.php');

	logout();

	$_SESSION['success'] = "Desconected with success!";

	header("Location: index.php");

	die();