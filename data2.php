<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Page</title>
<link href="http://127.0.0.1/furniture/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
       
         <link href="http://127.0.0.1/furniture/assets/css/style.css" rel="stylesheet" type="text/css"  media="all" />
       
        <script src="http://127.0.0.1/furniture/assets/js/jquery.min.js"></script>        
       
        <style type="text/css">
<!--
.style3 {
	font-size: x-large;
	color: #00FF00;
	font-style: italic;
}
.style4 {color: #FF0000}
-->
        </style>
</head><body>

   <!--  start-wrap -->
    <div class="wrap">
        <!--  start-header -->
        <div class="header">
    <!--  start-logo -->
    <div class="col-md-4 logo">
        <p><a href="http://127.0.0.1/phone/"><img src="/furniture/assets/images/Home of the best furniture.png" alt="logo" width="213" height="122" /></a></p>
        <p>&nbsp;</p>
    </div>
    <p>
      <!--  end-logo -->
  <style>
body{background-color:#OOFFFF}
</style>
    <p>    
    <p>    
    <p>    
    <p>    
    <p>    
    <p>
                    <p>    
    <p>    
    <p>    
    <p>    
    <p>    
    <p>
<div>
            <td><p class="style1 style3">&nbsp;</p>
            <p class="style1 style3">Registered Customers</p></td>
         <table border="1">
            <th width="150"> <span class="style4">Name</span></th>
                    <th width="180"><span class="style4">Email</span></th>
                    <th width="300"><span class="style4">Contact</span></th>
                    

            </tr>

        <?php

             while($row=  mysqli_fetch_array($con))
             {
                 ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['contact']; ?></td>
               
            </tr>
        <?php
             }
             ?>
      </table>
</div>
	
    </body>
</html>
