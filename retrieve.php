<?php 

	include('template/header.php');
	include('config/dbconfig.php');
	include('functions/productsFunctions.php'); 

	$products = retrieveProducts($conection);

?>

	<?php if($_GET['removed'] && $_GET['removed'] == true) { ?>
		<p align="center" class="alert alert-success">Product was successfully removed!</p>
	<?php } else if($_GET['created'] && $_GET['created'] == true) { ?>
		<p align="center" class="alert alert-success">Product was successfully created!</p>
	<?php } else if($_GET['updated'] && $_GET['updated'] == true) { ?>
		<p align="center" class="alert alert-success">Product was successfully updated!</p>
	<?php } ?>

	<table class="table table-striped">
		<caption>Products</caption>
		<thead>
			<tr>
				<th>#</th>
				<th>Product</th>
				<th>Price</th>
				<th>Description</th>
				<th colspan="2">Actions</th>
			</tr>
		</thead>

		<tbody>
			<?php $x = 0; ?>
			<?php foreach($products as $product): ?>
				<tr>
					<td><?= $x += 1; ?></td>
					<td><?= $product['productName']; ?></td>
					<td><?= "R$ " . $product['productPrice']; ?></td>
					<td><?= $product['productDescription']; ?></td>
					<td width="120">
						<form action="update.php" method="post" accept-charset="utf-8">
							<input type="hidden" name="id" value="<?= $product['productId']; ?>" />
							<input type="submit" class="btn btn-warning  btn-group-justified" value="Edit" />
						</form>
					</td>
					<td width="120">
						<form action="delete.php" method="post" accept-charset="utf-8">
							<input type="hidden" name="id" value="<?= $product['productId']; ?>" />
							<input type="submit" class="btn btn-danger  btn-group-justified" value="Remove" />
						</form>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>	

<?php include('template/footer.php'); ?>