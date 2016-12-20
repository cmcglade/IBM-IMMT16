<!DOCTYPE html>
<html>
<title>Luciano Stabel - Contact Page</title>
<style type="text/css">
	@import url("style.css");
</style>	
</head>
<body>
<div class="page">
	<div class="header">
		<h1>Luciano Stabel</h1>
	</div>
	<div class="image">
	<h2><span>Graphic Designer</span> and <span>UX/UI</span> Professional</h2>
	</div>
	<div class="box1">
		<br> <br>
		<img src="contact.png" width="279" height="320" alt="Luciano Stabel">
	</div>
	<div class="box2">
	<h2>Keep in touch!</h2>
		<form method="post" class="formtext">
			<p class="name">
            	<label for="firstName">Name: <input class="input" type="text" name="firstName" id="firstName" placeholder="First Name" style="width: 358px" /></label></p>
            	<p><label for="lastName">Last Name: <input class="input" type="text" name="lastName" id="lastName" placeholder="Last Name" style="width: 327px"/></label>
		</p>
		<p class="phone">
            	<label for="phone">Phone: <input class="input" type="text" name="phone" id="phone" placeholder="Your Phone" style="width: 353px" /></label>
		</p>		
		<p class="password">
           		 <label for="password">Password: <input class="input" type="password" name="password" id="password" placeholder="Your Password" style="width: 332px"/></label>
		</p>
		<p class="text">
				<p><label for="subject">Subject: <input class="input" type="text" name="subject" id="subject" placeholder="Subject" style="width: 345px" /></label></p>
            	<label for="text">Message: </label><br>
            	<textarea class="input" name="text" id="text" placeholder="Leave your message"></textarea>
		<p class="submit">
            	<input type="submit" value="Submit">
		</p>
	</form>
		
	<?php  
   		if (!empty($_POST['firstName'])) {
   			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$phone = $_POST['phone'];
			$password = $_POST['password'];
			$subject = $_POST['subject'];
			$text = $_POST['text'];
   			echo "<h3>Thank You ", $firstName, " ", $lastName, " for submitting your information. We will contact you soon at ", $phone, " to discuss ", $subject, ".";
   		}
    ?> 
	</div>
		<div class="footer"></div>
		</div>
</body>
</html>