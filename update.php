<?php

	include('template/header.php');
	include('config/dbconfig.php');
	include('functions/productsFunctions.php');
	include('functions/categorysFunctions.php');

	$categorys = retrieveCategorys($conection);

	$id = $_POST['id'];
	$product = $_POST['product'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$$category = $_POST['category_id'];

	if(updateProducts($conection, $id, $product, $price, $description, $category)) {

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
			<select class="form-control" name="category_id">
				<option value="">--- CATEGORY ---</option>
				<?php foreach($categorys as $category): ?>
				<option value="<?= $category['categoryId']; ?>"><?= $category['categoryName']; ?></option>
				<?php endforeach ?>
			</select><br />
			<textarea name="description" class="form-control" placeholder="Description"></textarea><br />
			<input type="submit" value="Save" class="btn btn-success btn-group-justified" />
		</form>
	</div>
	<div class="col-lg-4"></div>

<?php include('template/footer.php'); ?>
