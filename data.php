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
.style1 {color: #00FF00}
.style2 {
	font-size: x-large;
	font-style: italic;
}
.style3 {color: #FF0000}
.style4 {
	color: #000000;
	font-size: xx-large;
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
        <p><a href="http://127.0.0.1/phone/"><img src="/furniture/assets/images/Home of the best furniture.png" alt="logo" width="213" height="122" /></a></p>
</div>
    <p>
      <!--  end-logo -->
  <style>
body{background-color:#OOFFFF}
</style>
     <?php
        $con=  mysqli_connect("localhost", "root", "", "furniture");

        if(!$con)
       {
           die('not connected');
       }
            $con=  mysqli_query($con, "select * from bed");

       ?>
<div>
            <td><p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1 style2">Purchased Furniture</p>
            <p class="style2 style4">Beds</p></td>
         <table border="1">
            <th width="150"> <span class="style3">Name</span></th>
                   
                    <th width="300"><span class="style3">Amount Paid</span></th>
                    

            </tr>

        <?php

             while($row=  mysqli_fetch_array($con))
             {
                 ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                
                <td><?php echo $row['amount']; ?></td>
               
            </tr>
        <?php
             }
             ?>
  </table>
  
</div>
 <?php
        $con=  mysqli_connect("localhost", "root", "", "furniture");

        if(!$con)
       {
           die('not connected');
       }
            $con=  mysqli_query($con, "select * from coffee");

       ?>
<div>
            <td><p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            
            <p class="style2 style4">Coffee Tables</p></td>
         <table border="1">
            <th width="150"> <span class="style3">Name</span></th>
                   
                    <th width="300"><span class="style3">Amount Paid</span></th>
                    

            </tr>

        <?php

             while($row=  mysqli_fetch_array($con))
             {
                 ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                
                <td><?php echo $row['amount']; ?></td>
               
            </tr>
        <?php
             }
             ?>
  </table>
</div>
 <?php
        $con=  mysqli_connect("localhost", "root", "", "furniture");

        if(!$con)
       {
           die('not connected');
       }
            $con=  mysqli_query($con, "select * from dining");

       ?>
<div>
            <td><p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            
            <p class="style2 style4">Dining Tables</p></td>
         <table border="1">
            <th width="150"> <span class="style3">Name</span></th>
                   
                    <th width="300"><span class="style3">Amount Paid</span></th>
                    

            </tr>

        <?php

             while($row=  mysqli_fetch_array($con))
             {
                 ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                
                <td><?php echo $row['amount']; ?></td>
               
            </tr>
        <?php
             }
             ?>
  </table>
</div>
 <?php
        $con=  mysqli_connect("localhost", "root", "", "furniture");

        if(!$con)
       {
           die('not connected');
       }
            $con=  mysqli_query($con, "select * from sofa");

       ?>
<div>
            <td><p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
           
            <p class="style2 style4">Sofas</p></td>
         <table border="1">
            <th width="150"> <span class="style3">Name</span></th>
                   
                    <th width="300"><span class="style3">Amount Paid</span></th>
                    

            </tr>

        <?php

             while($row=  mysqli_fetch_array($con))
             {
                 ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                
                <td><?php echo $row['amount']; ?></td>
               
            </tr>
        <?php
             }
             ?>
  </table>
</div>
 <?php
        $con=  mysqli_connect("localhost", "root", "", "furniture");

        if(!$con)
       {
           die('not connected');
       }
            $con=  mysqli_query($con, "select * from tvstand");

       ?>
<div>
            <td><p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
            <p class="style1">&nbsp;</p>
           
            <p class="style2 style4">Tv Stands</p></td>
         <table border="1">
            <th width="150"> <span class="style3">Name</span></th>
                   
                    <th width="300"><span class="style3">Amount Paid</span></th>
                    

            </tr>

        <?php

             while($row=  mysqli_fetch_array($con))
             {
                 ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                
                <td><?php echo $row['amount']; ?></td>
               
            </tr>
        <?php
             }
             ?>
  </table>
</div>
    </body>
<br />
<br />
<p><a href="http://127.0.0.1/furniture/report.php" target="_parent">Back</a>
<br />
<br />
<br />
</html>
