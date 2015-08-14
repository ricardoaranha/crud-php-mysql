<?php

	require_once('template/header.php');
	require_once('functions/productsFunctions.php');
	require_once('functions/categorysFunctions.php');
	require_once('functions/sessionFunctions.php');

	verifyUser();

	$productData = array(
					"productName" => "", 
					"productPrice" => "", 
					"categoryId" => "",
					"categoryName" => "",
					"productDescription" => "");

	$selected = "";

	$categorys = retrieveCategorys($conection);

	$product = $_POST['product'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$category = $_POST['category_id'];

	if(createProducts($conection, $product, $price, $description, $category)) {

		$_SESSION['success'] = "Product was successfully created!";

		header("Location: retrieve.php");

		die();
		
	}

?>

	<div class="col-lg-3"></div>
	<div class="col-lg-6">
		<h1 align="center">Register Product</h1>
		<hr />
		<form action="create.php" method="post" accept-charset="utf-8">
			<?php require_once('template/productForm.php'); ?>
			<input type="submit" value="Register" class="btn btn-success btn-group-justified" />
		</form>
	</div>
	<div class="col-lg-3"></div>

<?php require_once('template/footer.php'); ?>
