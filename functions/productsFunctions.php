<?php

function retrieveProducts($conection) {

	$products = array();
	$query = mysqli_query($conection, 
		"select * from tblproducts 
		inner join tblcategorys
		on tblproducts.categoryId = tblcategorys.categoryId");

	while($result = mysqli_fetch_assoc($query)) {

		array_push($products, $result);

	}

	return $products;

}

function createProducts($conection, $product, $price, $description, $category) {

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

	return mysqli_query($conection, $query);

}

function searchProduct($conection, $id) {

	$query = mysqli_query($conection, 
		"select * from tblproducts 
		inner join tblcategorys
		on tblproducts.categoryId = tblcategorys.categoryId
		where productId = {$id}");

	return mysqli_fetch_assoc($query);

}

function updateProducts($conection, $id, $product, $price, $description, $category) {

	$query = "update tblproducts set 
				productName = '{$product}',
				productPrice = {$price},
				productDescription = '{$description}',
				categoryId = {$category}
				where productId = {$id}";

	return mysqli_query($conection, $query);

}

function deleteProducts($conection, $id) {

	$query = "delete from tblproducts where productId = {$id}";

	return mysqli_query($conection, $query);

}