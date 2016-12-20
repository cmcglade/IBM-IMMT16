<!--good effort here on the php.  I couldn;t make it work however, even when using hello as
  password, your message should use variable replacement, ie include the variables in the string, or concatentation-->


<?php 

  $fname = $_POST['FirstName'];
  $lname = $_POST['LastName'];
  $phone = $_POST['Phone'];
  $email = $_POST['Email'];
  $subject = $_POST['Subject'];
  $password = $_POST['password'];
  $comment = $_POST['comment'];

if ($password == "hello")
{
    echo "Thank you for submitting your feedback, " , $fname, ". We will contact you soon at ", $phone, " to discuss ", $subject,". Please allow up to 48 hours for a response.";
}
   
else { 
       echo "Your password is incorrect.";
     }
?>