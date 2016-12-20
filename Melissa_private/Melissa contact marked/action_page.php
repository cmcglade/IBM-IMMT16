<!DOCTYPE html><!--doctype declaration-->
<!--This is my contact page, Melissa Frew Student #300921033, IMMT-715-->
<html lang="en"><!-- open html document and declare language-->	
<head>
	<title>thank you!</title>
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
    			<li><a class="navlinks" href="contact.php">contact</a></li>
  			</ul><!--close nav list-->
  			<hr class="line">	
  		</nav>
	</header><!-- close header-->
	<div class="allcontent">
		<div><!--open main content div-->
			<section class="responsetext">
				<?php 
					$firstName = $_POST['firstName'];
					$lastName = $_POST['lastName'];
					$phoneNumber = $_POST['phoneNumber'];
					$contact = $_POST['contact'];
					$message = $_POST['message'];
					$date = $_POST['date'];
					$submit = $_POST['submit'];
      				echo ucwords("<h2>Hello $firstName $lastName</h2>"); 
      				echo ("<p>Great to hear from you, I will call you tomorrow at $phoneNumber. I am looking forward to hearing more about your project: $message. Let's see if we can get it done by $date!</p>");
      				
      			?>
      		</section>
		</div><!--close main content div-->
		<footer><!--open footer div-->
			<div class="smedia"><!--open social media links div-->
				<a href="https://www.facebook.com/frewdesignetc/?ref=bookmarks"><img src="img/facebook.png" alt="facebook link" width="75"></a>
				<a href="https://www.linkedin.com/in/melissafrew?trk=hp-identity-name"><img src="img/linkedin.png" alt="linked in link" width="75"></a>
				<a href="https://www.instagram.com/studiofrew/"><img src="img/instagram.png" alt="instagram link" width="75"></a>
			</div><!--close social medaia links div-->
			<h3> © frew design etc. 2016 </h3>
		</footer><!--close footer div-->
	</div>
</body>
</html><!-- close html document-->