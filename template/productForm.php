			<input type="text" class="form-control" name="product" value="<?= $productData['productName']; ?>" placeholder="Product" /><br />
			<input type="number" step="0.01" class="form-control" name="price" value="<?= $productData['productPrice']; ?>" placeholder="Price" /><br />
			<select class="form-control" name="category_id">
				<option value="" <?= $selected; ?>>--- CATEGORY ---</option>
				<?php foreach($categorys as $category):

					if($category['categoryId'] == $productData['categoryId']) {
						
						$selected = "selected";

					} ?>
				<option value="<?= $category['categoryId']; ?>" <?= $selected; ?>><?= $category['categoryName']; ?></option>
				<?php endforeach ?>
			</select><br />
			<textarea name="description" class="form-control" placeholder="Description"><?= $productData['productDescription']; ?></textarea><br />