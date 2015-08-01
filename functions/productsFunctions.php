<?php

function retrieveProducts($conection) {

	$products = array();
	$query = mysqli_query($conection, "select * from tblproducts");

	while($result = mysqli_fetch_assoc($query)) {

		array_push($products, $result);

	}

	return $products;

}

function createProducts($conection, $product, $price, $description) {

	$query = "insert into 
				tblproducts (productName, productPrice, productDescription) 
				values ('{$product}', {$price}, '{$description}')";

	return mysqli_query($conection, $query);

}

function updateProducts($conection, $id, $product, $price, $description) {

	$query = "update tblproducts set 
				productName = '{$product}',
				productPrice = {$price},
				productDescription = '{$description}'
				where productId = {$id}";

	return mysqli_query($conection, $query);

}

function deleteProducts($conection, $id) {

	$query = "delete from tblproducts where productId = {$id}";

	return mysqli_query($conection, $query);

}