<?php

	include('template/header.php');
	include('config/dbconfig.php');
	include('functions/productsFunctions.php');	

	$id = $_POST['id'];
	$product = $_POST['product'];
	$price = $_POST['price'];
	$description = $_POST['description'];

	if(updateProducts($conection, $id, $product, $price, $description)) {

		header("Location: retrieve.php?updated=true");

		die();
		
	}

?>

	<div class="col-lg-4"></div>
	<div class="col-lg-4">
		<h1 align="center">Edit Product</h1>
		<hr />
		<form action="update.php" method="post" accept-charset="utf-8">
			<input type="hidden" name="id" value="<?= $id; ?>" />
			<input type="text" class="form-control" name="product" placeholder="Product" /><br />
			<input type="number" step="0.01" class="form-control" name="price" placeholder="Price" /><br />
			<textarea name="description" class="form-control" placeholder="Description"></textarea><br />
			<input type="submit" value="Upadte" class="btn btn-success btn-group-justified" />
		</form>
	</div>
	<div class="col-lg-4"></div>

<?php include('template/footer.php'); ?>
