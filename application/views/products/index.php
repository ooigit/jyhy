<?php foreach($products as $product): ?>

	<h2><a href="products/<?php echo $product['id'] ?>"><?php echo $product['name'] ?></a></h2>
	<div id="main">
		<p><?php echo $product['description'] ?></p>
	</div>

<?php endforeach ?>
