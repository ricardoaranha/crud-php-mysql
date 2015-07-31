<?php

	include('template/header.php');
	include('config/dbconfig.php');
	include('functions/productsFunctions.php');	

	$id = $_GET['id'];
	$product = $_POST['product'];
	$price = $_POST['price'];

	if(updateProducts($conection, $id, $product, $price)) {

		header("Location: retrieve.php?updated=true");

		die();
		
	}

?>

	<div class="col-lg-4"></div>
	<div class="col-lg-4">
		<h1 align="center">Alter Product</h1>
		<hr />
		<form action="update.php?id=<?= $id; ?>" method="post" accept-charset="utf-8">
			<input type="text" class="form-control" name="product" placeholder="Product" /><br />
			<input type="number" step="0.01" class="form-control" name="price" placeholder="Price" /><br />
			<input type="submit" value="Upadte" class="btn btn-success btn-group-justified" />
		</form>
	</div>
	<div class="col-lg-4"></div>

<?php include('template/footer.php'); ?>
