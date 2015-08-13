<?php 

	include('template/header.php');
	include('config/dbConfig.php');
	include('functions/productsFunctions.php');
	include('functions/sessionFunctions.php');

	$id = $_POST['id'];

	deleteProducts($conection, $id);

	$_SESSION['success'] = "Product was successfully removed!";

	header("Location: retrieve.php");

	die();
