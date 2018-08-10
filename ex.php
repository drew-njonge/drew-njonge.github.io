<HTML>
      <HEAD>
        <TITLE>Contact</TITLE>

        <script type="text/javascript">

          function addtext()
          {
             var name = document.myform.name.value;
             var email = document.myform.email.value;
             var contact = document.myform.contact.value;

             document.writeln("Thank you! Your purchase has been successful!!");
             document.writeln("<pre>");
             document.writeln("Name  : " + name);
             document.writeln("Email : " + email);
             document.writeln("Phone Number : " + contact);
			
          }
        </script>
      </HEAD>
      <BODY>

      <center>
<b>CONTACT US</b> <br></br>   
<form name="myform">

  <label for="first_name">Name </label>
  <input  type="text" name="first_name" maxlength="50" size="30">
    <br>
  <label for="last_name">Email </label>
  <input  type="text" name="last_name" maxlength="50" size="30">
    <br>
  <label for="email">Phone</label>
  <input  type="text" name="email" maxlength="80" size="30">
    <br>
  <input type="submit" value="Submit" onClick="addtext()">

</form>

    </BODY>
    </HTML>