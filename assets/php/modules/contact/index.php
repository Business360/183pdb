<?php

/*
	=======================
	START:	GLOBAL VARIABLES
	=======================
*/

// Who you want to recieve the emails from the form.
$office_email = 'info@thedentalhub.co.nz';

// Email from which the notifications are sent
$sender_header = 'From:'. $office_email;

// Who you want to send the confirmation of the form.
$sender_email	=	$_REQUEST['email'];

// The subject you'll see in your inbox
$subject = 'The Dental Hub | Contact Form';

// Notification for senders
$sender_information	=	'Thank you for your enquiry.! One of staff will come back to ASAP';

// Message for the user when he/she doesn't fill in the form correctly.
$errormessage = 'Looks like you are missing some info. Try again.&nbsp;';

//Message for the user when he/she fills in the form correctly.
$thanks = "Thanks for the email. We'll get back to you as soon as we can.&nbsp;";

// Message for the bot when it fills in in at all.
$honeypot = "You filled in the honeypot! If you're human, try again!&nbsp;";

// Various messages displayed when the fields are empty.
$emptyname =  'Please provide your name?&nbsp;';
$emptyphone = 'Please provide your phone number?&nbsp;';
$emptyemail = 'Please provide your email address?&nbsp;';
$emptymessage = 'Please provide a message';
$emptysubject = 'Please provide a Subject';

// Various messages displayed when the fields are incorrectly formatted.
$alertname =  'Entering your name using only the standard alphabet?&nbsp;';
$alertphone =  'Entering your phone number using only the standard characters?&nbsp;';
$alertemail = 'Entering your email in this format: <i>name@example.com</i>?&nbsp;';
$alertmessage = "Making sure you aren't using any parenthesis or other escaping characters in the message? Most URLS are fine though!&nbsp;";
$alertsubject = "Making sure you aren't using any parenthesis or other escaping characters in the message? Most URLS are fine though!&nbsp;";

$alert = '';
$pass = 0;

/*
	======================
	END:	GLOBAL VARIABLES
	======================
*/

/*
	=================
	START:	FUNCTIONS
	=================
*/

function clean_var($variable) {
	$variable = strip_tags(stripslashes(trim(rtrim($variable))));
  return $variable;
}

/*
	================
	END:	FUNCTIONS
	================
*/

/*
	==================
	START:	CONDITIONS
	==================
*/

if ( empty($_REQUEST['last']) ) {

	if ( empty($_REQUEST['name']) ) {
	  $pass = 1;
	  $alert .= "<li>" . $emptyname . "</li>";
	  $alert .= "<script>jQuery(\"#name\").addClass(\"error\");</script>";
	} elseif ( preg_match( "/[][{}()*+?.\\^$|]/", $_REQUEST['name'] ) ) {
	  $pass = 1;
	  $alert .= "<li>" . $alertname . "</li>";
	}
	if ( empty($_REQUEST['phone']) ) {
	  $pass = 1;
	  $alert .= "<li>" . $emptyphone . "</li>";
	  $alert .= "<script>jQuery(\"#phone\").addClass(\"error\");</script>";
	} elseif ( preg_match( "/[][{}()*+?.\\^$|]/", $_REQUEST['phone'] ) ) {
	  $pass = 1;
	  $alert .= "<li>" . $alertphone . "</li>";
	}
	if ( empty($_REQUEST['email']) ) {
	  $pass = 1;
	  $alert .= "<li>" . $emptyemail . "</li>";
	  $alert .= "<script>jQuery(\"#email\").addClass(\"error\");</script>";
	} elseif ( !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $_REQUEST['email']) ) {
	  $pass = 1;
	  $alert .= "<li>" . $alertemail . "</li>";
	}
	if ( empty($_REQUEST['message']) ) {
	  $pass = 1;
	  $alert .= "<li>" . $emptymessage . "</li>";
	  $alert .= "<script>jQuery(\"#message\").addClass(\"error\");</script>";
	} elseif ( preg_match( "/[][{}()*+?\\^$|]/", $_REQUEST['message'] ) ) {
	  $pass = 1;
	  $alert .= "<li>" . $alertmessage . "</li>";
	}
	if ( empty($_REQUEST['subject']) ) {
	  $pass = 1;
	  $alert .= "<li>" . $emptysubject . "</li>";
	  $alert .= "<script>jQuery(\"#subject\").addClass(\"error\");</script>";
	} elseif ( preg_match( "/[][{}()*+?\\^$|]/", $_REQUEST['subject'] ) ) {
	  $pass = 1;
	  $alert .= "<li>" . $alertsubject . "</li>";
	}
  
	if ( $pass==1 ) {
  
	// echo "<script>$(\".message\").toggle();$(\".message\").toggle().hide(\"fast\").show(\"fast\"); </script>";
	echo "<script>$(\".message .alert\").addClass('alert-danger').removeClass('alert-success'); </script>";
	echo $errormessage;
	echo $alert;
  
	} elseif (isset($_REQUEST['message'])) {
  
	  $information = "From: " . clean_var($_REQUEST['name']) . "\n";
	  $information .= "Phone: " . clean_var($_REQUEST['phone']) . "\n";
	  $information .= "Email: " . clean_var($_REQUEST['email']) . "\n";
	  $information .= "Subject: " . clean_var($_REQUEST['subject']) . "\n";
	  $information .= "Message: \n" . clean_var($_REQUEST['message']);
	  $header = 'From:'. clean_var($_REQUEST['email']);
  
	  mail($office_email, $subject, $information, $header);
	  mail($sender_email, $subject, $sender_information, $sender_header);
	  echo "<script>jQuery(\".message\").toggle();jQuery(\".message\").toggle().hide(\"fast\").show(\"fast\");jQuery('#contactForm')[0].reset();</script>";
	  echo "<script>jQuery(\".message .alert\").addClass('alert-success').removeClass('alert-danger'); </script>";
	  echo $thanks;
	  echo "<script>jQuery(\"#name\").removeClass(\"error\");jQuery(\"#email\").removeClass(\"error\");jQuery(\"#message\").removeClass(\"error\");</script>";
	  echo "<script>jQuery(\".message .alert\").delay(4000).hide(\"fast\");</script>";
	  die();
  
	  echo "<br/><br/>" . $message;
  
	  }
  
  } else {
	  echo "<script>jQuery(\".message\").toggle();jQuery(\".message\").toggle().hide(\"fast\").show(\"fast\");</script>";
	  echo $honeypot;
  }

/*
	=================
	END:	CONDITIONS
	=================
*/

?>

<?php


?>