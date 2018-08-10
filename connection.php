<html>
<style type="text/css">
<!--
.style2 {
	font-size: xx-large;
	color: #FF0000;
}
-->
</style>
<body>

<p class="style2">Transaction Details</p>
</body>
</html>
<?php

define('DB_NAME', 'furniture');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' . mysql_error());
	}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Cant use ' . DB_NAME . ' : ' . mysql_error());
	}
	
echo 'Purchase Successful!!! <br>';
 echo 'Transaction ID: '.uniqid();
	if (isset($_POST['name'])){
		$name = $_POST['name'];}
		echo "<br>Name: ".$name;
	if (isset($_POST['furniture'])){
		$furniture = $_POST['furniture'];}
		echo "<br>Furniture Model: ".$furniture;
	if (isset($_POST['price'])){
		$price = $_POST['price'];}
		echo "<br>Amount paid Ksh: ".$price;
 
$sql = "INSERT INTO payment(name,furniture,price) VALUES ('$name','$furniture','$price')";

if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
	}
	
	mysql_close();
	
	
?>
<br/>
<br/>
<br/>
