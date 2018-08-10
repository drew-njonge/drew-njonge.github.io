<img src="assets/images/Home of the best furniture.png" alt="logo" width="213" height="122" longdesc="/furniture/assets/images/Home of the best furniture.png"></br></br></br>
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
	
echo 'Feedback received.Thank you!!';
if (isset($_POST['name'])){
	$name = $_POST['name'];}
	
if (isset($_POST['email'])){
	$email = $_POST['email'];}
	
if (isset($_POST['comment'])){
	$comment = $_POST['comment'];}
	
$sql = "INSERT INTO admin(name, email, comment) VALUES ('$name' ,'$email','$comment')";

if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
	}
	
	mysql_close();
	
?>

<br/>
<br/>
<p><a href="index.html" target="_parent">Back</a>