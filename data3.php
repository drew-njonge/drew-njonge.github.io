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
.style6 {color: #FF0000}
.style8 {
	color: #00FF00;
	font-size: x-large;
	font-style: italic;
}
-->
        </style>
</head><body>

   <!--  start-wrap -->
    <div class="wrap">
        <!--  start-header -->
        <div class="header">
    <!--  start-logo -->
<div class="col-md-4 logo">
    <p>&nbsp;</p>
</div>
    <p><img src="/furniture/assets/Home of the best furniture.png" alt="logo" width="213" height="122" longdesc="/furniture/assets/Home of the best furniture.png" />
    <p>    
    <p>    
    <p>
<p>    
    <p>    
    <p>    
    <p>    
    <p>    
    <p>
      <style>
body{background-color:#</style>

    <p>
      <?php
        $con=  mysqli_connect("localhost", "root", "", "furniture");

        if(!$con)
       {
           die('not connected');
       }
            $con=  mysqli_query($con, "select * from admin");

       ?>
    
<div>
            <td><span class="style1 style8">Customer Feedback</span></td>
         <table border="1">
            <th width="150"> <span class="style6">Name</span></th>
                    <th width="180"><span class="style6">Email</span></th>
                    <th width="300"><span class="style6">Comments</span></th>
                    

            </tr>

        <?php

             while($row=  mysqli_fetch_array($con))
             {
                 ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['comment']; ?></td>
               
            </tr>
        <?php
             }
             ?>
  </table>
</div>

</body>
<br>
<br>
<p><a href="http://127.0.0.1/furniture/report.php" target="_parent">Back</a>
<br>
<br>
</html>