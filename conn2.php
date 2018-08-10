<p><img src="assets/Home of the best furniture.png" alt="logo" width="213" height="122"></p>
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
	
echo 'Login Successful!!! Welcome!!! <br><br>';

if (isset($_POST['name'])){
	$value = $_POST['name'];}
	echo "Name: ".$value;
if (isset($_POST['email'])){
	$email = $_POST['email'];}
	echo "<br>Email: ".$email;
if (isset($_POST['contact'])){
	$phone = $_POST['contact'];}
	echo "<br>Phone No: ".$phone;
	
	//$con=  mysqli_query($con, "select * from customers where name='$value'");

$sql = "INSERT INTO customers(name,email,contact) VALUES ('$value','$email','$phone')";
 
// $_SESSION['user_name'] = $value;
 
 
 

if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
	}
	
	
	
	mysql_close();
	
?>


<p><a href="purchase.html?id=<?php echo $value;?>" target="_parent">Click here to proceed</a>
</p>
