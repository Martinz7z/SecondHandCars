<?php include 'includes/header.php';?>

<main class="container">
<title>Contact us</title>
<!-- define some style elements-->

	
<br><br>
<h1>Contact us</h1><br>

<!-- form from 'sample-validation-form -->
<form name='registration'>
<ul>
<li><label for="userid">User id:</label></li>
<li><input type="text" name="userid" id="userid" size="12" onBlur="userid_validation();"/><span id="uid_err"></span></li>
<li><label for="passid">Password:</label></li>
<li><input type="password" name="passid" id="passid" size="12" onBlur="passwd_validation();"/><span id="passwd_err"></span></li>
<li><label for="username">Name:</label></li>
<li><input type="text" name="username" id="username" size="50" onBlur="username_validation();" /><span id="name_err"></span></li>
<li><label for="address">Address:</label></li>
<li><input type="text" name="address" id="address" size="50" /><span id="add_err"></span></li>
<li><label for="country">Country:</label></li>
<li><select id="country" name="country" onBlur="country_validation();">
<option selected="" value="Default">(Please select a country)</option>
<option value="--">none</option>
<option value="AF">Australia</option>
<option value="AL">Canada</option>
<option value="DZ">India</option>
<option value="AS">Russia</option>
<option value="AD">USA</option>
</select><span id="country_err"></span></li>
<li><label for="zip">ZIP Code:</label></li>
<li><input type="text" name="zip" id="zip" onBlur="zip_validation();" /><span id="zip_err"></span></li>
<li><label for="email">Email:</label></li>
<li><input type="text" name="email" id="email" size="50" onBlur="email_validation();"/><span id="email_err"></span></li>
<li><label id="gender">Sex:</label></li>
<li><input type="radio" name="msex" id="msex" value="Male" onBlur="gender_validation();" /><span>Male</span></li>
<li><input type="radio" name="fsex" id="fsex" value="Female" /><span>Female</span><span id="gender_err"></span></li>
<li><label>Language:</label></li>
<li><input type="checkbox" name="en" value="en" checked /><span>English</span></li>
<li><input type="checkbox" name="nonen" value="noen" /><span>Non English</span></li>
<li><label for="desc">About:</label></li>
<li><textarea name="desc" id="desc"></textarea></li>
<li><input type="submit" name="submit" value="Submit" /></li>
</ul>
</form>
<!-- end of 'sample-validation-form -->

<form method="POST" name="contactform" action="contact-form-handler.php"> 
<p>
<label  for='name' class = "contactptext" >Your Name:</label> <br>
<input type="text" name="name" class="form-control" id="userid" onBlur="userid_validation();" required>
</p>
<p>
<label for='email' class = "contactptext">Email Address:</label> <br>
<input type="text" name="email" class="form-control" required> <br>
</p>
<p>
<label for="phone" class = "contactptext" required>Enter a phone number:</label><br><br>


<input type="tel" id="phone" name="phone" class="form-control" placeholder="085-435-6478" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br>
 <small class = "fs-6 text">Format: 123-425-6784</small><br> 
</p>
  
<p>
<label for='message' class = "contactptext">Message:</label> <br>
<textarea name="message" class="form-control"></textarea>
</p>
<input type="submit" value="Submit" class="btn btn-primary"><br>
</form>

<script src="js/validation.js">
</script>

  <?php include 'includes/footer.php';?>