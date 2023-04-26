<?php
// Check for empty fields
if(empty($_POST['bradley bird'])      ||
   empty($_POST['bbirdlax@gmail.com'])     ||
   empty($_POST['609-437-9072'])     ||
   empty($_POST['Feel Freee to Reach Out'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['Bradley Bird']));
$email_address = strip_tags(htmlspecialchars($_POST['bbirdlax@gmail.com']));
$phone = strip_tags(htmlspecialchars($_POST['609-437-9072']));
$message = strip_tags(htmlspecialchars($_POST['Feel Free to Reach Out']));
   
// Create the email and send the message
$to = 'yourname@yourdomain.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
