<?php 

	include('template/header.php');
	include('config/dbConfig.php');
	include('functions/productsFunctions.php');
	include('functions/sessionFunctions.php');

	verifyUser();
 
	$products = retrieveProducts($conection);

?>

	<table class="table table-hover">
		<caption>PRODUCTS</caption>
		<thead>
			<tr>
				<th>#</th>
				<th>Product</th>
				<th>Price</th>
				<th>Category</th>
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
				<td><?= $product['categoryName']; ?></td>
				<td><?= $product['productDescription']; ?></td>
				<td width="120">
					<form action="update.php" method="post" accept-charset="utf-8">
						<input type="hidden" name="productId" value="<?= $product['productId']; ?>" />
						<input type="submit" class="btn btn-warning btn-group-justified" value="Edit" />
					</form>
				</td>
				<td width="120">
					<form action="delete.php" method="post" accept-charset="utf-8">
						<input type="hidden" name="id" value="<?= $product['productId']; ?>" />
						<input type="submit" class="btn btn-danger btn-group-justified" value="Remove" />
					</form>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>	

<?php include('template/footer.php'); ?>