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
$subject = 'The Dental Hub | Appointments';

// Notification for senders
$sender_information	=	"Thank you for emailing The Dental Hub - Avondale. Please note that this is not an actual appointment, but only a request for one. We will contact you for a confirmation shortly after. <br><br> We try to reply your message as soon as possible in case if you want to contact urgently call is free on 0800 FixTooth";

// Message for the user when he/she doesn't fill in the form correctly.
$errormessage = 'Looks like you are missing some info. Try again.';

//Message for the user when he/she fills in the form correctly.
$thanks = "Thanks for the email. We'll get back to you as soon as we can.";

// Message for the bot when it fills in in at all.
$honeypot = "You filled in the honeypot! If you're human, try again!";

// Various messages displayed when the fields are empty.
$emptyname =  'Entering your name?';
$emptyphone = 'Entering your phone number?';
$emptydob = 'Date of Birth?';
$emptydate = 'Appointment date?';
$emptytime = 'Appointment time?';

// Various messages displayed when the fields are incorrectly formatted.
$alertname =  'Entering your name using only the standard alphabet?';
$alertphone =  'Entering your phone number using only the standard characters?';
$alertdob = '';
$alertdate = '';
$alerttime = '';

$alert = '';
$pass = 0;

//form alert messages structure 
$ma_top = '
	<div class="message message-modal message-close">
	<button type="button" class="message-close-button"><i class="fa fa-close"></i></button>
	<div class="alert">
';
$ma_bot = '
	</div></div>
';

// required fileds data array
$required_fields = array(
	'1' => array(
		'name' => 'name',
		'empty' => $emptyname,
		'alert' => $alertname,
		),
	'2' => array(
		'name' => 'phone',
		'empty' => $emptyphone,
		'alert' => $alertphone,
		),
	'3' => array(
		'name' => 'date',
		'empty' => $emptydate,
		'alert' => $alertdate,
		),
	'4' => array(
		'name' => 'time',
		'empty' => $emptytime,
		'alert' => $alerttime,
		),
	'5' => array(
		'name' => 'dob',
		'empty' => $emptydob,
		'alert' => $alertdob,
		),
);

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
	
	foreach($required_fields as $rf){
		if ( empty($_REQUEST[''.$rf['name'].'']) ) {
			$pass = 1;
			$alert .= "<div class='message-item-list'>" . $rf['empty'] . "</div>";
		  } elseif ( preg_match( "/[][{}()*+?.\\^$|]/", $_REQUEST[''.$rf['name'].''] ) ) {
			$pass = 1;
			$alert .= "<div class='message-item-list'>" . $rf['alert'] . "</div>";
		  }
	};

  if ( $pass==1 ) {
	echo '
		<div class="message message-close message-error">
			<button type="button" class="message-close-button"><i class="fa fa-close"></i></button>
			<div class="alert alert-danger">'.$errormessage.$alert.'</div>
		</div>
	';
  
  } elseif (isset($_REQUEST['message'])) {

	$message = "From: " . clean_var($_REQUEST['name']) . "\n";
	$message .= "Phone: " . clean_var($_REQUEST['phone']) . "\n";
	$message .= "Email: " . clean_var($_REQUEST['email']) . "\n";
	$message .= "Date: " .clean_var($_REQUEST['date']) . "\n"; 
	$message .= "Date of Birth: " .clean_var($_REQUEST['dob']) . "\n"; 
	$message .= "Time: " .clean_var($_REQUEST['time']) . "\n";
	$message .= "Message: \n" . clean_var($_REQUEST['message']);
	$header = 'From:'. clean_var($_REQUEST['email']);

	mail($office_email, $subject, $message, $header);
	mail($sender_email, $subject, $sender_information, $office_email);
	echo '
		<div class="message message-close message-success">
			<button type="button" class="message-close-button"><i class="fa fa-close"></i></button>
			<div class="alert alert-success">'.$thanks.'</div>
		</div>
	';
	die();
	echo $message;
	}

} else {
	/* echo $honeypot; */
	echo '
		<div class="message message-close message-error">
			<button type="button" class="message-close-button"><i class="fa fa-close"></i></button>
			<div class="alert alert-danger">'.$honeypot.'</div>
		</div>
	';
}

/*
	=================
	END:	CONDITIONS
	=================
*/

?>