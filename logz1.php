<?php
require_once 'config.php';
require_once 'database.php';

 
  
  $userName = $_POST['name'];
  $password = $_POST['email'];
  
  
 
 
    // check the database and see if the username and password combo do match
    $sql = "SELECT name,email
            FROM customers
       ";
    $result = dbQuery($sql);
  
    if (dbNumRows($result) == 1) {
		//echo "1";
		
      $row = dbFetchAssoc($result);
     
     // $_SESSION['user_name'] = $row['name'];
      
	header('Location: login.php'); // Redirecting To Home Page

     
     
    } 
	else{
		echo '<div id="alert alert-danger">Please confirm details</div>';
	}
      
      
  
  

?>
