<?php
session_start();
error_reporting(0);
date_default_timezone_set('NZ');

function db_credentials() {
	if ($_SERVER['SERVER_NAME'] === "localhost") {
		$username = "root";
		$password = "";
		$hostname = "localhost";
	} else {
		$username = "";
		$password = "";
		$hostname = "localhost";
	}
 //connection to the database
 $dbhandle = mysql_connect($hostname, $username, $password) or die(mysql_error());
 return $dbhandle;
}

function db_connect() {
 $dbhandle           =   db_credentials();
 //select a database to work with
 $selected           = mysql_select_db("dental_hub",$dbhandle) or die(mysql_error());
 return $dbhandle;
}


//To Get Base Url
function baseurl() {
	if ($_SERVER['SERVER_NAME'] === "localhost") {
		$base = "http://localhost/websites/dentalhub";
		return $base;
	} else {
		$base = "";
		return $base;
	}
}


function apostrophe($name) {
	if (strpos($name, "'")){
		$name = str_replace("'","''",$name);
	}
	return $name;
}

//Encrypt and decrypt of urls
function encrypt_decrypt($action, $string) {
	$output 								= false;

	$encrypt_method = "AES-256-CBC";
	$secret_key 				= 'This is my secret key';
	$secret_iv 					= 'This is my secret iv';

	// hash
	$key 											= hash('sha256', $secret_key);
	
	// iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
	$iv 												= substr(hash('sha256', $secret_iv), 0, 16);

	if( $action 				== 'encrypt' ) {
		$output 							= openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
		$output 							= base64_encode($output);
	}
	else if($action == 'decrypt' ){
		$output 							= openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
	}
	return $output;
}
?>