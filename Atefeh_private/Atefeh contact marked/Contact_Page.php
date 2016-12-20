<!DOCTYPE html>
<html lang="en">
<head>
	<title>contact Page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/stylesheet.css">
<!--really strong work, nice styling, good form validation although the phone number validation a bit strict, I would be tempted to take any 7 numbers and reformat.  
There as an error in your message display, first name
	displayed twice.-->
</head>		
<body>
	<div>
		<h1>Lets Keep in Touch!</h1>
		<h2>Contact Me</h2>
		<hr style="color: black">
		
		<div id="Formbox">
		<form class="Form" method="post">
			<fieldset>
				<legend>Personal Details</legend>
 				<label>* First Name:</label><br><input type="text" name="firstName" required="required"><br>
				<label>* Last Name:</label><br><input type="text" name="lastName" required="required"><br>
				<label>Phone Number:</label><br><input type="tel" name="phoneNumber" placeholder="(555)555-5555" pattern="[\(]\d{3}[\)]\d{3}[\-]\d{4}"><br><br>
				
			</fieldset>

			<fieldset>
				<legend>Email Details</legend>
				<label>Email:</label><br><input type="email" placeholder="myemail@example.com" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="required"><br>
				<label>Password:</label><br>
				<input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br>
			</fieldset>

			<fieldset>
				<legend>Message</legend>
				<label>Message:</label><br><textarea name="generalInformation"></textarea><br>
			</fieldset>
			
			<label>
			<input type="submit" name="Submit" value="Submit">
			</label><br>
			<hr style= "color:black">
			<p>Look at my<span> Blog</span> and<span> LinkedIn</span> pages</p>
			<ul class="externalLinks">		
				<li><a href="http://www.creativeux.blogspot.ca/" target="_blank"><img src="images/blog.png" alt="Blog image"></a></li>
				<li><a href="https://www.linkedin.com/in/atefeh-mansouri-19554755?trk=hp-identity-name" target="blank"><img src="images/linkedin.png" 
					 alt="LinkedIn image"></a></li>
			</ul>
	
		</form>	
			
			<?php   
				$firstName = $_POST['firstName'];
				$lastName = $_POST['lastName'];
				$phoneNumber = $_POST['phoneNumber'];
				$information = $_POST['generalInformation'];

				if(isset($_POST['firstName']))
				{

						echo "Thank you $firstName $lastName for submitting your information.
						We will contact you soon at $phoneNumber to discuss $information"; 
					
				}
			
			?>
		</div>
	</div>	

	 
</body>
	
</html>