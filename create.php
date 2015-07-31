<?php

	include('template/header.php');
	include('config/dbconfig.php');
	include('functions/productsFunctions.php');	

	$product = $_POST['product'];
	$price = $_POST['price'];

	if(createProducts($conection, $product, $price)) {

		header("Location: retrieve.php?created=true");

		die();
		
	}

?>

	<div class="col-lg-4"></div>
	<div class="col-lg-4">
		<h1 align="center">Register Product</h1>
		<hr />
		<form action="create.php" method="post" accept-charset="utf-8">
			<input type="text" class="form-control" name="product" placeholder="Product" required /><br />
			<input type="number" step="0.01" class="form-control" name="price" placeholder="Price" required /><br />
			<input type="submit" value="Register" class="btn btn-success btn-group-justified" />
		</form>
	</div>
	<div class="col-lg-4"></div>

<?php include('template/footer.php'); ?>
