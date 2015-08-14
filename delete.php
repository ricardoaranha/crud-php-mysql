<?php 

	require_once('template/header.php');
	require_once('functions/productsFunctions.php');
	require_once('functions/sessionFunctions.php');

	$id = $_POST['id'];

	deleteProducts($conection, $id);

	$_SESSION['success'] = "Product was successfully removed!";

	header("Location: retrieve.php");

	die();
