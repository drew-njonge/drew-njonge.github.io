<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "furniture");
if(isset($_POST["add"]))
{
	if(isset($_SEESION["cart"]))
	{
		$item_array($_GET["id"], $item_array_id))
		{
			$count =count($SESSION["cart"]);
			$item_array = array(
			'product_id'=> $_GET["id"];
			'item_name' = > $POST["hidden_name"];
			'product_price' => $_POST["hidden_price"];
			'item_quantity' => $_POST["quantity"];
			);
		}
		else
		{
			echo '<script>alert("Products already added to cart")</script>';
			echo '<script>window.location="index.php"</script>';
		}
	}
	else
	{
		$item_array = array(
		'product_id' => $_GET["id"];
		'item_name' => $_POST["hidden_name"];
		'product_price' => $_POST["hidden_price"];
		'item_quantity' => $_POST["quantity"]
		);
		$_SESSION["cart"][0] = $item_array;
	}
}
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{ 	
		foreach($_SESSION[["cart"] as $keys => $values)
		{
			if($values["product_id"] == $_GET["id"])
			{
				unset($_SESSION["cart"][$keys]);
				echo '<script>alert("Product has been removed")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
?>
