<?php 
	//admin mail
	$to = "info@thedentalhub.co.nz";
	$from = $_POST['email'];
	$subject = "The Dental Hub | Get in Touch";
	if($_POST['name']==''){
		echo "<script>alert('Name should not be empty');window.location='../../../../index.php';</script>";
	}elseif ($_POST['phone']=='') {
		echo "<script>alert('phone should not be empty');window.location='../../../../index.php';</script>";
	}elseif ($_POST['email']=='') {
		echo "<script>alert('email should not be empty');window.location='../../../../index.php';</script>";
	}elseif ($_POST['message']=='') {
		echo "<script>alert('message should not be empty');window.location='i../../../../ndex.php';</script>";
	}else {
		//all validation true send email to admin
		$information = "From: " . $_POST['name'] . "\n";
  $information .= "Phone: " . $_POST['phone'] . "\n";
  $information .= "Email: " . $_POST['email'] . "\n";
  $information .= "Message: \n" . $_POST['message'];
  $header = 'From:'. $_POST['email'];
 
  if(mail($to, $subject, $information, $header)){
  	echo "<script>alert('Submitted Successfully');window.location='../../../../index.php';</script>";
  }else{
  	echo "<script>alert('Failed to Submit! Try Again');window.location='../../../../index.php';</script>";
  }
	}
?>