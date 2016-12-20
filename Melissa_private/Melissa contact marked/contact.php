<!DOCTYPE html><!--doctype declaration-->
<!--This is my contact page, Melissa Frew Student #300921033, IMMT-715-->
<html lang="en"><!-- open html document and declare language-->	
<head>
	<title>contact me</title>
	<meta charset="utf-8"><!--character set declaration-->
	<link rel="stylesheet" type="text/css" href="css/styles.css"><!-- style sheet link-->
	<!--page title will appear in the tab of the browser-->
</head>
<body><!--open body of document-->
	<header> <!--open header, the header is on the top-->
		<nav class="navbar">
			<a href="index.html"><img id="logo" src="img/logo.png" alt="frew x design logo" title="frew x design"></a>
			<ul class="nav"><!--open nav list-->
    			<li><a class="navlinks" href="about.html">about</a></li>
    			<li><a class="navlinks" href="http://www.melissafrew.com/the-work.html">portfolio</a></li>
    			<li><a class="navlinks" href="http://frewdesignux.blogspot.ca/">blog</a></li>
    			<li><a class="navlinks" href="contact.html">contact</a></li>
  			</ul><!--close nav list-->
  			<hr class="line">	
  		</nav>
	</header><!-- close header-->
	<div class="allcontent">
		<div><!--open main content div-->
			<form class="contactForm" action="action_page.php" method='POST'>
				<h2 class="formtitle">
					Lets get to work!  Send me a message!  
				</h2>
					<fieldset class="boxstyle">
						<legend class="lgndtitle">  lets start with your name!  </legend>
						<label class="formlabel">First Name:  </label><input type="text" name="firstName"><br>
						<label class="formlabel">Last Name:  </label><input type="text" name="lastName">
					</fieldset>
					<fieldset class="boxstyle">
						<legend class="lgndtitle">pick a password to secure your message!</legend>
						<label class="formlabel">password:  </label><input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" ><br>
						<p class="formlabel">Hint: One letter, one number, a capital, a symbol and 8 characters!</p>
					</fieldset>
					<fieldset class="boxstyle">
						<legend class="lgndtitle">. . . and now your contact information?</legend>
						<label class="formlabel">Email:  </label><input type="text" name="email"><br>
						<label class="formlabel">Phone:  </label><input type="text" name="phoneNumber">
						<br>
						<label class="formlabel">Which type of contact do you prefer?   </label>
						<input type="radio" name="contact" value="email"><label class="radiolabel"> email</label>
						<input type="radio" name="contact" value="phoneNumber"><label class="radiolabel"> phone</label>
					</fieldset>
					<fieldset class="boxstyle">
						<legend class="lgndtitle">Do you have a question?</legend>
						<label class="formlabel"> . . . a bit about your project?</label><br>
						<textarea class="formtext" name="message" rows="5" cols="80">
						</textarea><br>
						<label class="formlabel">Do you have a deadline?</label>
						<input type="date" name="date">
					</fieldset>
					<fieldset class="boxstyle">
					<legend class="lgndtitle">ready to send?</legend>
						<input class="submitbutton" type="submit" value="submit">
					</fieldset>
				</form>		
		</div><!--close main content div-->
		<footer><!--open footer div-->
			<div class="smedia"><!--open social media links div-->
				<a class="smedlink" href="https://www.facebook.com/frewdesignetc/?ref=bookmarks"><img src="img/facebook.png" alt="facebook link" width="75"></a>
				<a class="smedlink" href="https://www.linkedin.com/in/melissafrew?trk=hp-identity-name"><img src="img/linkedin.png" alt="linked in link" width="75"></a>
				<a class="smedlink" href="https://www.instagram.com/studiofrew/"><img src="img/instagram.png" alt="instagram link" width="75"></a>
			</div><!--close social medaia links div-->
			<h3> © frew design etc. 2016 </h3>
		</footer><!--close footer div-->
	</div><!--close all content div-->
</body>
</html><!-- close html document-->