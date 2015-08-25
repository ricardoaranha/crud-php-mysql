<?php

require_once('config/dbConfig.php');

function retrieveProducts($connection) {

	$products = array();
	$query = mysqli_query($connection, 
		"select * from tblproducts 
		inner join tblcategorys
		on tblproducts.categoryId = tblcategorys.categoryId");

	while($result = mysqli_fetch_assoc($query)) {

		array_push($products, $result);

	}

	return $products;

}

function createProducts($connection, $product, $price, $description, $category) {

	$product = mysqli_real_escape_string($connection, $product);
	$price = mysqli_real_escape_string($connection, $price);
	$description = mysqli_real_escape_string($connection, $description);
	$category = mysqli_real_escape_string($connection, $category);

	$query = "insert into 
				tblproducts (
					productName, 
					productPrice, 
					productDescription, 
					categoryId) 
				values (
					'{$product}', 
					{$price}, 
					'{$description}', 
					{$category})";

	return mysqli_query($connection, $query);

}

function searchProduct($connection, $id) {

	$id = mysqli_real_escape_string($connection, $id);

	$query = mysqli_query($connection, 
		"select * from tblproducts 
		inner join tblcategorys
		on tblproducts.categoryId = tblcategorys.categoryId
		where productId = {$id}");

	return mysqli_fetch_assoc($query);

}

function updateProducts($connection, $id, $product, $price, $description, $category) {

	$id = mysqli_real_escape_string($connection, $id);
	$product = mysqli_real_escape_string($connection, $product);
	$price = mysqli_real_escape_string($connection, $price);
	$description = mysqli_real_escape_string($connection, $description);
	$category = mysqli_real_escape_string($connection, $category);

	$query = "update tblproducts set 
				productName = '{$product}',
				productPrice = {$price},
				productDescription = '{$description}',
				categoryId = {$category}
				where productId = {$id}";

	return mysqli_query($connection, $query);

}

function deleteProducts($connection, $id) {

	$id = mysqli_real_escape_string($connection, $id);

	$query = "delete from tblproducts where productId = {$id}";

	return mysqli_query($connection, $query);

}