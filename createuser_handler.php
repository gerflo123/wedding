<?php
session_start();
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$psw1 = $_POST['psw1'];
$psw2 = $_POST['psw2'];
$valid = true;
$messages = array();
if (empty($username)) {
  $messages[] = "Please enter a username";
  $valid = false;
}
if ($psw1 != $psw2) {
  $messages[] = "Passwords dont match";
  $valid = false;
}

if(strlen($username) < 4) {
		$messages[]= "DISPLAY NAME MUST BE MORE THAN 4 CHARACTERS LONG AND SHORTER THAN 20";
		$valid = false;
	}
	
if(strlen($username) > 20) {
		$messages[]= "DISPLAY NAME MUST BE MORE THAN 4 CHARACTERS LONG AND SHORTER THAN 20";
		$valid = false;
	}

if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) { 
	$messages[] = "PLEASE ENTER A VALID EMAIL";
		$valid = false;
	}
	//not working yet
		if(!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',$psw1)) {
		$messages[] = "Password must contain at least one: number,symbol, uppercase letter, lowercase letter.";
		$valid = false;
	}

if (!$valid) {
    $_SESSION['messages'] = $messages;
    $_SESSION['form_input'] = $_POST;
    header("Location: login.php");
    exit();
}


// Insert stuff into a user table in the database..
require_once 'Dao.php';
$dao = new Dao();
$dao->saveLogin($username,$email,$psw1,$fullname);


$_SESSION['message'] = "Thanks!";
$_SESSION['good'] = true;
header('Location: welcome.php');



exit;
?>