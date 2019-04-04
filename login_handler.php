<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['presets']['username'] = $username;
$_SESSION['presets']['password'] = $password;
$message = array();
$presets = array();
require_once 'Dao.php';
$dao = new Dao();
$login = $dao->getLogin($username)[0];
	if (password_verify($password, $login['password'])){
		echo "<script>console.log( 'Debug Objects' );</script>";
	$_SESSION['logged_in'] = 'true';
	header('Location: welcome.php');
	exit;
	}
	
	
		

	
if (!$valid) {
	$message[] = "User or password invalid";
    $_SESSION['message'] = $message;

    $_SESSION['logged_in'] = $_POST;
    header("Location: login.php");
    exit();
} 
	/*
	$_SESSION['logged_in'] = false;
	$_SESSION['message'] = "Username or password invalid";
	header('Location: login.php');
	exit;
*/