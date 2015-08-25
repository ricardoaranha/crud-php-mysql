<?php

	require_once('template/header.php');
	require_once('functions/productsFunctions.php');
	require_once('functions/categorysFunctions.php');
	require_once('functions/sessionFunctions.php');

	verifyUser();

	$categorys = retrieveCategorys($connection);

	$productId = $_POST['productId'];

	$selected = "";

	$productData = searchProduct($connection, $productId);

	$id = $_POST['id'];
	$product = $_POST['product'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$category = $_POST['category_id'];

	if(updateProducts($connection, $id, $product, $price, $description, $category)) {

		$_SESSION['success'] = "Product was successfully updated!";

		header("Location: retrieve.php");

		die();
		
	}

?>

	<div class="col-lg-3"></div>
	<div class="col-lg-6">
		<h1 align="center">Edit Product</h1>
		<hr />
		<form action="update.php" method="post" accept-charset="utf-8">
			<input type="hidden" name="id" value="<?= $productData['productId']; ?>" />
			<?php require_once('template/productForm.php'); ?>
			<input type="submit" value="Save" class="btn btn-success btn-group-justified" />
		</form>
	</div>
	<div class="col-lg-3"></div>

<?php require_once('template/footer.php'); ?>
