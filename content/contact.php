<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: ' . $name . ' <' . $email . '>' . "\r\n";
	
	$to = 'evanlaurie@me.com';
	$subject = 'Your website sent you an email!';
	$body = $message;

	if($_POST['submit']){
		if(mail($to, $subject, $body, $headers)){
			 //echo '<p>Your message has been sent!</p>';
		}
  }
?>

<form id="contact-form" method="POST" enctype="multipart/form-data">
	<fieldset class="clearboth">
		<input id="contact-form-name" type="text" name="name" placeholder="Your name">
		<input id="contact-form-email" type="text" name="email" placeholder="Your email">
	</fieldset>
	<textarea id="contact-form-message" name="message" placeholder="Your message"></textarea>
	<input id="contact-form-submit" type="submit" name="submit" value="Send">
</form>