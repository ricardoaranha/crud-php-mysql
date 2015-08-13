<?php

	include('template/header.php');
	include('config/dbConfig.php');
	include('functions/productsFunctions.php');
	include('functions/categorysFunctions.php');
	include('functions/sessionFunctions.php');

	verifyUser();

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
			<input type="text" class="form-control" name="product" placeholder="Product" required /><br />
			<input type="number" step="0.01" class="form-control" name="price" placeholder="Price" required /><br />
			<select class="form-control" name="category_id" required>
				<option value="">--- CATEGORY ---</option>
				<?php foreach($categorys as $category): ?>
				<option value="<?= $category['categoryId']; ?>"><?= $category['categoryName']; ?></option>
				<?php endforeach ?>
			</select><br />
			<textarea name="description" class="form-control" placeholder="Description"></textarea><br />
			<input type="submit" value="Register" class="btn btn-success btn-group-justified" />
		</form>
	</div>
	<div class="col-lg-3"></div>

<?php include('template/footer.php'); ?>
