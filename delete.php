<?php 

	include('template/header.php');
	include('config/dbconfig.php');
	include('functions/productsFunctions.php');

	$id = $_POST['id'];

	deleteProducts($conection, $id);

	header("Location: retrieve.php?removed=true");

	die();
