<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Page</title>
<link href="http://127.0.0.1/phone/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
       
         <link href="http://127.0.0.1/phone/assets/css/style.css" rel="stylesheet" type="text/css"  media="all" />
       
        <script src="http://127.0.0.1/phone/assets/js/jquery.min.js"></script>        
       
        <style type="text/css">
<!--
.style3 {font-size: x-large}
.style5 {color: #0000FF; font-size: x-large; }
.style6 {color: #FF0000}
-->
        </style>
</head><body>
    <!--  start-wrap -->
    <div class="wrap">
        <!--  start-header -->
        <div class="header">
    <!--  start-logo -->
    <div class="col-md-4 logo">
        <p><a href="http://127.0.0.1/phone/"><img src="http://127.0.0.1/phone/logo2.png" title="logo"/></a></p>
    </div>
    <p>
      <!--  end-logo -->
    </p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
	
	
	

    <p>&nbsp;</p>
    <li><a href="cellphone.html">Logout</a></li>
</ul>

 <?php
        $con=  mysqli_connect("localhost", "root", "", "cellshop");

        if(!$con)
       {
           die('not connected');
       }
            $con=  mysqli_query($con, 'SELECT * FROM login');
       ?>
        <div>
            <td><span class="style3">Customer Login Details </span></td>
            <table width="513" border="1">
            <th width="164"> <span class="style5">Name</span></th>
                    <th width="168"><span class="style5">Email</span></th>
                    <th width="74"><span class="style5">Contact</span></th>
                     

            </tr>

        <?php

             while($row=  mysqli_fetch_array($con))

             {
                 ?>
            <tr>
                <td><?php echo $row['name']; ?> </td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['contact']; ?></td> 
            </tr>
        <?php
             }
             ?>
          </table>
</div>


 <?php
        $con=  mysqli_connect("localhost", "root", "", "cellshop");

        if(!$con)
       {
           die('not connected');
       }
            $con=  mysqli_query($con, 'SELECT * FROM payments');
       ?>
        <div>
            <td><span class="style3">Customer Purchase Details </span></td>
            <table width="618" border="1">
            <th width="160"> <span class="style5">Name</span></th>
                    <th width="237"><span class="style5">Phone Model </span></th>
					<th width="94"><span class="style5">Price </span></th>
                    
                     

            </tr>

        <?php

             while($row=  mysqli_fetch_array($con))

             {
                 ?>
            <tr>
                <td><?php echo $row['name']; ?> </td>
				
                <td><?php echo $row['amount']; ?></td>
                
            </tr>
        <?php
             }
             ?>
          </table>
</div>




 
    <form action="cancel.php" method="POST" class="form" role="form">
      <h4 class="form-heading style3 style6">Which customer do you want to cancel?</h4>
      <tr>
        <td><label>Customer Name</label></td>
        <td><input type="text" name="name" id="name" class="form-control" required placeholder="Enter customer Name"></td>
      </tr>
      <tr>
        <td><label>Amount</label></td>
        <td><input type="text" name="amount" id="amount" class="form-control" required placeholder="Enter amount"></td>
      </tr>
      <button type="submit" id="cancel" value="Submit" class="btn btn-lg btn-danger btn-block">Delete</button>
    </form>
	<script language="javascript">
function check(form)/*function to check userid & password*/
{
 /*the following code checkes whether the entered userid and password are matching*/
 if(form.userid.value == "admin" && form.pswrd.value == "12345")
  {
    window.open('db.php')/*opens the target page while Id & password matches*/
  }
 else
 {
   alert("Error Password or Username")/*displays error message*/
  }
}
</script>
  </div>
</div>
</body>
</html>