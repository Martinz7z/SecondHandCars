<?php include 'includes/header.php';?>

<main class="container">
<title>Contact us</title>
<!-- define some style elements-->

	
<br><br>
<h1>Enquiry Form</h1><br>

<!-- Normal contact form with form handler and validation -->

<form method="POST" name="contactform" action="contact-form-handler.php"> 




   <!-- name -->
<p><label  for='name' class = "contactptext" >Your Name:</label> <br>
<input type="text" name="name" class="form-control" required></p>
<!-- end of name -->




  <!-- start of email -->
<p><label for='email' class = "contactptext">Email Address:</label> <br>
<input type="text" name="email" id ="email" onBlur="email_validation();" class="form-control" required><span id="email_err">
</span><br></p>
<!-- end of email -->


 

 <!-- start of phone -->
<p><label for="phone" class = "contactptext" required>Enter a phone number:</label><br><br>
<input type="tel" id="phone" name="phone" class="form-control" 
placeholder="085-435-6478" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br>
<small class = "fs-6 text">Format: 123-425-6784</small><br></p> 
<!-- end of phone -->

<!-- start of postcode -->
<label for="zip" class = "contactptext">Post Code:</label>
<input type="text" name="zip" id="zip" onBlur="zip_validation();" /><span id="zip_err"></span><br><br>
<!-- end of postcode -->


<!-- start of gender -->
<label id="gender"  class = "contactptext">Sex:</label><br>
<input type="radio" name="msex" id="msex" value="Male" onBlur="gender_validation();" /><span>Male</span>
<input type="radio" name="fsex" id="fsex" value="Female" /><span>Female</span><span id="gender_err"></span><br><br> 
<!-- end of gender -->


<!-- start of carbrand -->
<label for="country" class = "contactptext">Car Brand:</label>
<select id="country" name="country" onBlur="country_validation();">
<option selected="" value="Default">(Please select a country)</option>
<option value="--">none</option>
<option value="AF">BMW</option>
<option value="AL">Mercedes</option>
<option value="DZ">Lexus</option>
<option value="AS">Hyundai</option>
<option value="AD">Honda</option>
</select><span id="country_err"></span><br><br>

<!-- end of carbrand -->

<!-- start of price -->
<label class = "contactptext">Price Range:</label><br>
<input type="checkbox" name="en" value="en" checked /><span>Higher End</span>
<input type="checkbox" name="nonen" value="noen" /><span>Lower End</span><br><br>
<!-- end of price -->


 <!-- start of message -->
<p><label for='message' class = "contactptext">Message:</label> <br>
<textarea name="message" class="form-control"></textarea></p>
<!-- end of message -->







<!-- submit button -->
<input type="submit" value="Submit" class="btn btn-primary"><br>


</form>
<!-- end of Normal contact form with form handler and validation -->

<script src="js/validation.js">
</script>

  <?php include 'includes/footer.php';?>