<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
require 'class.phpmailer.php';
$mail = new PHPMailer;

$myemail  =    "ncozby@cvwest.org";
$name     =    check_input($_POST['name']);
$email    =    check_input($_POST['email']);
$phone    =    check_input($_POST['phone']);
$subject  =    "Flex High Contact Form";
$captcha  =	   check_input($_POST['captcha']);
$body  =	   check_input($_POST['message']);

if($captcha == "" && $name && $email && $phone)
		{
			$mail->From = $email;
			$mail->FromName = $name;
			//$mail->addAddress('ncozby@cvwest.org', 'Natalie');     // Add a recipient
			$mail->addAddress('rberry@learn4life.org', 'Robert');     // Add a recipient  
			$mail->addReplyTo($email, $name);


			$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = $subject;
			$mail->Body    = 'Phone Number: ' . $phone . '</b>
				Message: '. $body . ' ';

			if(!$mail->send()) {

				$error_message = $mail->ErrorInfo;
    				
			} else {
   					 $success = 'Message has been sent';
			}		

		}
		
		else
		{
			$error_message ="Something went wrong. Please try again";
		}


}

function check_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}