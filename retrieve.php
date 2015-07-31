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
				<th>Edit</th>
				<th>Remove</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach($products as $product): ?>
				<tr>
					<td><?php echo $product['productId']; ?></td>
					<td><?php echo $product['productName']; ?></td>
					<td><?php echo "R$ " . $product['productPrice']; ?></td>
					<td><a href="update.php?id=<?= $product['productId']; ?>"><span class="text-success glyphicon glyphicon-edit"></span></a></td>
					<td><a href="delete.php?id=<?= $product['productId']; ?>"><span class="text-danger glyphicon glyphicon-trash"></span></a></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>	

<?php include('template/footer.php'); ?>