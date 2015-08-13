<?php

	include('template/header.php');
	include('config/dbConfig.php');
	include('functions/productsFunctions.php');
	include('functions/categorysFunctions.php');
	include('functions/sessionFunctions.php');

	verifyUser();

	$categorys = retrieveCategorys($conection);

	$productId = $_POST['productId'];

	$selected = "";

	$productData = searchProduct($conection, $productId);

	$id = $_POST['id'];
	$product = $_POST['product'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$category = $_POST['category_id'];

	if(updateProducts($conection, $id, $product, $price, $description, $category)) {

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
			<input type="text" class="form-control" name="product" value="<?= $productData['productName']; ?>" /><br />
			<input type="number" step="0.01" class="form-control" name="price" value="<?= $productData['productPrice']; ?>" /><br />
			<select class="form-control" name="category_id">
				<?php foreach($categorys as $category):

					if($category['categoryId'] == $productData['categoryId']) {
						
						$selected = "selected";

					} ?>
				<option value="<?= $category['categoryId']; ?>" <?= $selected; ?>><?= $category['categoryName']; ?></option>
				<?php endforeach ?>
			</select><br />
			<textarea name="description" class="form-control"><?= $productData['productDescription']; ?></textarea><br />
			<input type="submit" value="Save" class="btn btn-success btn-group-justified" />
		</form>
	</div>
	<div class="col-lg-3"></div>

<?php include('template/footer.php'); ?>
