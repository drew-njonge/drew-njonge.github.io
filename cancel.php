<?php 

	$name = $_POST['name'];
	$amount = $_POST['amount'];

	$connect = mysql_connect("localhost","root","") or die("Connection Failed...".mysql_error());

	mysql_select_db("furniture",$connect);

	$del1 = "DELETE FROM customers WHERE name = ".$name;
	$del2 = "DELETE FROM payment WHERE price = ".$amount;

	mysql_query($del1) or die(mysql_error());
	mysql_query($del2) or die(mysql_error());
	

	mysql_close($connect);

	header("Location: data.php");
	
?>