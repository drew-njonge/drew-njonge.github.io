<?php
	//Database connection settings
	define ('hostnameorservername','localhost'); // Your host or server name goes in here
	define ('serverusername','root');			 // Your database username goes in here
	define ('serverpassword',''); 			 // Your database password goes in here
	define ('databasenamed','furniture'); 			 // Your database name goes in here
	
	
	global $connection;
	$connection = @mysql_connect(hostnameorservername,serverusername,serverpassword) or die('Connection could not be made to the SQL Server. Please report this system error at <font color="blue">info@Andrewsolutions.com</font>');
	@mysql_select_db(databasenamed,$connection) or die('Connection could not be made to the database. Please report this system error at <font color="blue">Web Administrator</font>');



?>
