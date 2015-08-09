<?php 

	include('template/header.php');
	include('config/dbConfig.php');
	include('functions/productsFunctions.php');

	$id = $_POST['id'];

	deleteProducts($conection, $id);

	header("Location: retrieve.php?removed=true");

	die();
