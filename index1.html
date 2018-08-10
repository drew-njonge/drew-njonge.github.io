<?php
$session_start();
$connect = msqli_connet("localhost", "root", "", "furniture");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Shopping Cart</title>
</head>

<body>
<div class="container" style="width:60%;">
	<h2 align="center">Furniture Shopping Cart</h2>
	<?php
	$query = "SELECT * FROM products ORDER BY id ASC";
	$result = mysqli_query($connect, $query);
	if(mysql_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			?>
			<div class ="col-md-4">
			<form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">
			<div style="border:1px solid #eaeaec; margin:-1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding:10px;"align="center">
			<img src="<?php echo $row["image"]; ?> class="img-responsive">
			<h5 class="text-info"><?ph echo $row["p_name"]; ?></h5>
			<h5 class="text-danger">$ <?php echo $row["price"]; ?></h5>
			<input="text" name="quantity" class="form-control" value="1">
			<input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
			<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
			<input type="submit" name="add" style="margin-top:5px;" class="btn btn-default" value="Add to cart" />
			</div>
			</form>
			</div>
			
			<?php
		}
	}
	
	?>
	<div style="clear:both"></div>
	<h2>y Shopping Cart</h2>
	<div class="table-responsive">
	<table class="table table-bordered">
	<tr>
	<th width="40%">Furniture Type</th>
	<th width="40%">Quantity</th>
	<th width="20%">Price Details</th>
	<th width="15%">Order Total</th>
	<th width="5%">Action</th>
	</tr>
	
	<?php
	if(!empty($_SEESION["cart"]))
	{
		$total = 0;
		foreach($_SESSION["cart"] as $keys => $values)
			{
				?>
				<tr>
				<td><?php echo $values["item_name"]; ?></td>
				<td><?php echo $values["item_quantity"]; ?></td>
				<td>$ <?php echo $values["product_price"]; ?></td>
				<td>$ <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
				<td><a href="beds.php?action=delete&id=<?php echo $values["product_id"]; ?>"<span class="text-danger">X</span></a></td>
				</tr>
				$total = $total + ($values["item_quantity"] * value["product_price"]);
			}
			
			<tr>
			<td colspan="3" align="right">Total</td>
			<td align="right">$ <?php echo number_format($total, 2); ?></td>
			<td></td>
			</tr>
			<?php
		}
		
		?>
		</table>
		</div>
</div>
	
</body>
</html>