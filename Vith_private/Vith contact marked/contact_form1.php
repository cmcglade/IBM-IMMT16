<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
    <link rel="stylesheet" href="mystyle1.css"/>
</head>
<body>

<h1> Vithurren Sivaloganathan <img src="AAEAAQAAAAAAAAVBAAAAJDZkMTMxOWRjLTBmM2ItNDcxOC1iOWRjLWE3MzdhOWFlZjU5OQ.jpg" alt= "its a me" width="100" height="150" align="left" margin="100px"> </h1>


<br>
<br>

<ul>
  <li><a href="home.html">Home</a></li>
  <li><a href="#background.html" >Background</a></li>
  <li><a href= "social.html" >Social Media</a></li>
  <li><a href="about.html">About</a></li>
</ul>

    <div class="container">
        <h2> <spanstyle="align:center;"  Get in touch with us!</h2>



        <form action="contact.php" method="post">
                    <label>First Name: </label><br />
                    <input class="input" type="text" name="firstname" placeholder="First name" pattern:"" required/><br />

                    <label>Last Name: </label><br />
                    <input class="input" type="text" name="lastname" placeholder="Last name" pattern:"" required/><br/>
                    <br/>

                    <label>Phone: </label><br />
                    <input class="input" type="number" name="phone" placeholder="XXX-XXX-XXXX" Phone Number" min="10" pattern:"" required/><br /><br />

                    <label>Password: </label><br />
                    <input class="input" type="password" name="password" placeholder="Password" pattern:"" required/><br /><br />


                    <label>Message: </label><br />
                    <textarea class="input" name="message" placeholder="Your feedback is valuable to us. Please leave us a message." rows="6" col="30" required/></textarea><br /><br />

                    <input class="submit" type="submit" name="submit" value="Submit"><br /><br />
        </form>
    </div>
</body>
</html>