<?php include 'includes/header.php';?>

<main class="container">
<title>Contact us</title>
<!-- define some style elements-->

	
<br><br>
<h1>Contact us</h1>
<form method="POST" name="contactform" action="contact-form-handler.php"> 
<p>
<label for='name'>Your Name:</label> <br>
<input type="text" name="name" class="form-control">
</p>
<p>
<label for='email'>Email Address:</label> <br>
<input type="text" name="email" class="form-control"> <br>
</p>
<p>
<label for="phone">Enter a phone number:</label><br><br>


<input type="tel" id="phone" name="phone" class="form-control" placeholder="085-435-6478" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br>
 <small>Format: 123-425-6784</small><br> 
</p>
  
<p>
<label for='message'>Message:</label> <br>
<textarea name="message" class="form-control"></textarea>
</p>
<input type="submit" value="Submit" class="btn btn-primary"><br>
</form>

<script language="JavaScript">
var frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>

  <?php include 'includes/footer.php';?>