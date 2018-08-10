<?php
require 'connection2.php';
$result = mysqli_query($con, 'SELECT * FROM products');
?>

<table cellpadding="2" cellspacing="2" border="0">
	<tr>
	<th>Id</th>
	<th>Name</th>
	<th>Price</th>
	<th>Buy</th>
	</tr>
	<?php 
		while($products = mysqli_fetch_object($result))
		{ 
		?>
		<tr>
			<td><?php echo $product->id; ?></td>
			<td><?php echo $product->name; ?></td>
			<td><?php echo $product->price; ?></td>
			<td><a href="">Order Now</a></td>
	<?php } ?>
</table>