<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "furniture";

try {
	$conn = new PDO("mysql:host = $servename;dbname", $username, $password);
	$conn = setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO payment (name, furniture, price) VALUES ('$name','$furniture','$amount')
	$con = exec($sql);
	
	}
catch(PDOException $e)
	{
	echo $sql . $e = getMessage();
	}
$conn = null;

?>